<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\Admin; // Import the AdminList model

class AdminList extends Component
{
    public $admins;

    public function mount()
    {
        $this->admins = Admin::all();
    }

    public function render()
    {
        return view('livewire.laravel-examples.AdminList');
    }
}
