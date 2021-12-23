<?php

namespace App\Http\Livewire\Activity;

use LivewireUI\Modal\ModalComponent;
use App\Models\Activity;

class Edit extends ModalComponent
{
    public function render()
    {
        return view('livewire.activity.edit');
    }
}
