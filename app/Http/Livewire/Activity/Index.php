<?php

namespace App\Http\Livewire\Activity;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Activity;
use App\Models\Village;
use App\Models\ActivityType;
use Illuminate\Support\Collection;
use App\Exports\ActivitiesExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class Index extends Component
{
    use WithPagination;

    public $listeners = ['reload' => '$refresh'];
    public $search = "";
    public $year;
    public $village;
    public $type;

    protected $queryString = ['type', 'search', 'year', 'village'];

    public function render()
    {
        $data = Activity::whereHas('activity_type', function($q) {
            if(!$this->type) return $q;
            return $q->where('slug', '=', $this->type);
        });
        if($this->search) {
            $data->where('name', 'like', '%' . $this->search . '%');
        }
        if($this->year) {
            $data->where('start', '=', $this->year);
        }
        if($this->village) {
            $data->where('village_id', '=', $this->village);
        }
        $activities = $data->orderBy('id', 'desc')->paginate(10)->withQueryString();
        return view('livewire.activity.index', ['activities' => $activities, 'villages' => Village::all(), 'total_volume' => $activities->sum('volume')]);
    }

    public function export() {
        $data = Activity::whereHas('activity_type', function($q) {
            if(!$this->type) return $q;
            return $q->where('slug', '=', $this->type);
        });
        if($this->search) {
            $data->where('name', 'like', '%' . $this->search . '%');
        }
        if($this->year) {
            $data->where('start', '=', $this->year);
        }
        if($this->village) {
            $data->where('village_id', '=', $this->village);
        }
        $activities = $data->orderBy('id', 'desc')->get();
        $pdf = PDF::loadView('export.activity', ['activities' => $data->orderBy('activities.id', 'asc')->get(), 'description' => ActivityType::where('slug', '=', $this->type)->first()->name])->output();
        return response()->streamDownload(fn () => print($pdf), 'Rekap Kegiatan '.$this->type.' '.date("Y-m-d H:i:s").'.pdf');
    }

}
