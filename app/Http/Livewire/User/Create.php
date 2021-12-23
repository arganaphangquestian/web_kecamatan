<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;

class Create extends ModalComponent
{
    public $user;

    protected $rules = [
        'user.name' => 'required',
        'user.email' => 'required|email',
        'user.password' => 'required',
    ];

    public function mount() {
        $this->user = [
            'name' => '',
            'email' => '',
            'password' => '',
        ];
    }

    public function render()
    {
        return view('livewire.user.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $this->validate();
        User::create([
            'name' => $this->user['name'],
            'email' => $this->user['email'],
            'password' => $this->user['password'],
        ]);
        $this->emit('reload');
        $this->closeModal();
    }
}
