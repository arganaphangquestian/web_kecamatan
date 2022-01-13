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
    protected $queryString = ['search'];

    public function render()
    {
        $data = User::where('name', 'like', '%' . $this->search . '%');
        return view('livewire.user.index', ['users' =>  $data->orderBy('id', 'desc')->paginate(10)->withQueryString()]);
    }
}
