<?php


namespace App\Http\Livewire\LaravelExamples;

use App\Models\Member;
use Livewire\Component;

class Members extends Component
{
    public $members;

    public function mount()
    {
        $this->members = Member::all()->toArray();
    }

    // Other methods...

    public function render()
    {
        return view('livewire.laravel-examples.members');
    }
}
