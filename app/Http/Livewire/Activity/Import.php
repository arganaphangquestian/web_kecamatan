<?php

namespace App\Http\Livewire\Activity;

use LivewireUI\Modal\ModalComponent;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ActivitiesImport;
use Illuminate\Support\Facades\Storage;


class Import extends ModalComponent
{
    use WithFileUploads;

    public $csv;
    public $type;

    public function mount($type) {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.activity.import');
    }

    public function import() {
        $this->validate([
            'csv' => 'file',
        ]);
        $path = $this->csv->store('csv', 'public');
        $data = Excel::import(new ActivitiesImport($this->type), 'public/'.$path);
        $this->emit('reload');
        $this->closeModal();
    }

    public function download() {
        return Storage::disk('templates')->download('pengadaan.csv');
    }
}
