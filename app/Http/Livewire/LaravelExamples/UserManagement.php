<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\User; // Import the User model

class UserManagement extends Component
{
    public $admin; // Declare the $users property

    public function mount()
    {
        // Fetch users from the database
        $this->admin = User::all();
    }

    public function render()
    {
        return view('livewire.laravel-examples.user-management');
    }
}
