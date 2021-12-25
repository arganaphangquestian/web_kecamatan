<?php

namespace App\Http\Livewire\Activity;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Activity;

class Index extends Component
{
    use WithPagination;

    public $listeners = ['reload' => '$refresh'];
    public $search = "";
    public $type;

    protected $queryString = ['type'];

    public function render()
    {
        return view('livewire.activity.index', ['activities' => Activity::whereHas('activity_type', function($q) {
            if(!$this->type) return $q;
            return $q->where('slug', '=', $this->type);
        })->orderBy('id', 'desc')->paginate(10)]);
    }
}
