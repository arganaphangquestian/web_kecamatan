<?php

namespace App\Http\Livewire\Activity;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Activity;

class Index extends Component
{
    use WithPagination;

    public $listeners = ['reload' => '$refresh'];

    public $search = "";

    public function render()
    {
        return view('livewire.activity.index', ['activities' => Activity::orderBy('id', 'desc')->paginate(10)]);
    }
}
