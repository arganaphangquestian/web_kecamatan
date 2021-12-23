<?php

namespace App\Http\Livewire\Activity;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Activity;

class Index extends Component
{
    use WithPagination;

    public $search = "";

    public function render()
    {
        return view('livewire.activity.index', ['activities' => Activity::paginate(10)]);
    }
}
