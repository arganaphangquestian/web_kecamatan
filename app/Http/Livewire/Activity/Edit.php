<?php

namespace App\Http\Livewire\Activity;

use LivewireUI\Modal\ModalComponent;
use App\Models\Activity;
use App\Models\Village;
use Livewire\WithFileUploads;

class Edit extends ModalComponent
{
    use WithFileUploads;
    public $activity;
    public $attachment;

    protected $rules = [
        'activity.name' => 'required',
        'activity.amount' => 'required|numeric',
        'activity.village_id' => 'required',
        'activity.volume' => 'required|numeric',
        'activity.activity_type_id' => 'required|numeric',
        'activity.founding' => 'required',
        'activity.location' => 'required',
        'activity.start' => 'required',
    ];

    public function mount($id) {
        $this->activity = Activity::find($id);
    }

    public function render()
    {
        return view('livewire.activity.edit', ['villages' => Village::all()]);
    }

    public function submit() {
        if($this->attachment) {
            $this->activity['attachment'] = $this->attachment->store('activity', 'public');
        }
        $this->activity->save();
        $this->emit('reload');
        $this->closeModal();
    }
}
