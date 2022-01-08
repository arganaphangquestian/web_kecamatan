<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Activity;

class Index extends Component
{
    public function render()
    {
        $activities = Activity::whereNotNull('location')->get();
        return view('livewire.dashboard.index', ['activities' => $activities]);
    }
}
