<?php

namespace App\Exports;

use App\Models\Activity;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ActivitiesExport implements FromCollection, WithHeadings
{
    private $type;
    private $search;
    private $year;
    private $village;

    function __construct($type, $search, $year, $village) {
        $this->type = $type;
        $this->search = $search;
        $this->year = $year;
        $this->village = $village;
    }
    public function headings(): array
    {
        return [
            __('Nama Pengadaan'),
            __('Nilai Kontrak'),
            __('Desa'),
            __('Volume'),
            __('Sumber Dana'),
            __('Tahun'),
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Activity::with('village')->select('name', 'amount', 'village_id', 'volume', 'founding', 'start')->whereHas('activity_type', function($q) {
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
            $data->village->where('name', 'like', '%' . $this->village . '%');
        }
        return $data->orderBy('id', 'asc')->get();
    }
}
