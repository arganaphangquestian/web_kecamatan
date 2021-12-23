<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Index extends Component
{
    use WithPagination;

    public $listeners = ['reload' => '$refresh'];

    public $search = "";

    public function render()
    {
        return view('livewire.user.index', ['users' => User::paginate(10)]);
    }
}
