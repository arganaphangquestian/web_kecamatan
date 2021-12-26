<?php

namespace App\Http\Livewire\Activity;

use LivewireUI\Modal\ModalComponent;
use App\Models\Activity;
use App\Models\ActivityType;
use Livewire\WithFileUploads;

class Create extends ModalComponent
{
    use WithFileUploads;
    public $activity;
    public $attachment;

    protected $rules = [
        'activity.name' => 'required',
        'activity.amount' => 'required|numeric',
        'activity.village' => 'required',
        'activity.volume' => 'required|numeric',
        'activity.activity_type_id' => 'required|numeric',
        'activity.founding' => 'required',
        'activity.start' => 'required',
    ];

    public function mount($type) {
        $this->activity = new Activity();
        $this->activity['activity_type_id'] = ActivityType::where('slug', '=', $type)->first()->id;
    }

    public function render()
    {
        return view('livewire.activity.create');
    }

    public function submit() {
        $this->validate([
            'attachment' => 'file',
        ]);
        $this->activity['attachment'] = $this->attachment->store('activity', 'public');
        $this->activity->save();
        $this->emit('reload');
        $this->closeModal();
    }

}
