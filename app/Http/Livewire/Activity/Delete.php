<?php

namespace App\Http\Livewire\Activity;

use LivewireUI\Modal\ModalComponent;
use App\Models\Activity;

class Delete extends ModalComponent
{
    public Activity $activity;

    public function mount($id) {
        $this->activity = Activity::find($id);
    }

    public function render()
    {
        return view('livewire.activity.delete');
    }

    public function submit() {
        $this->activity->delete();
        $this->emit('reload');
        $this->closeModal();
    }
}
