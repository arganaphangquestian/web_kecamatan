<?php

namespace App\Http\Livewire\Activity;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Activity;
use App\Models\ActivityType;
use Illuminate\Support\Collection;

class Index extends Component
{
    use WithPagination;

    public $listeners = ['reload' => '$refresh'];
    public $search = "";
    public $year;
    public $village;
    public $type;

    protected $queryString = ['type'];

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
            $data->where('village', 'like', '%' . $this->village . '%');
        }
        return view('livewire.activity.index', ['activities' => $data->orderBy('id', 'desc')->paginate(10)]);
    }

}
