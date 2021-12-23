<?php

namespace App\Http\Livewire\Activity;

use LivewireUI\Modal\ModalComponent;
use App\Models\Activity;

class Create extends ModalComponent
{
    public Activity $activity;

    public function mount() {
        $this->activity = new Activity();
    }

    public function render()
    {
        return view('livewire.activity.create');
    }

    public function submit() {
        $this->activity->save();
        $this->emit('reload');
        $this->closeModal();
    }

}
