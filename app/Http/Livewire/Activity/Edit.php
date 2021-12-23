<?php

namespace App\Http\Livewire\Activity;

use LivewireUI\Modal\ModalComponent;
use App\Models\Activity;

class Edit extends ModalComponent
{
    public Activity $activity;

    public function mount($id) {
        $this->activity = Activity::find($id);
    }

    public function render()
    {
        return view('livewire.activity.edit');
    }

    public function submit() {
        $this->activity->save();
    }
}
