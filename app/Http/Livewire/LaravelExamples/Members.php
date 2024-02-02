<?php


namespace App\Http\Livewire\LaravelExamples;

use App\Models\User; // Import the User model
use Livewire\Component;

class Members extends Component
{
    public $members;

    public function mount()
    {
        // Fetch users from the 'users' table
        $this->members = User::all();
    }

    public function deleteUser($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $user->delete();
            // Re-fetch members after deletion
            $this->members = User::all();
            // Trigger SweetAlert
            $this->dispatchBrowserEvent('deleted', ['message' => 'User deleted successfully!']);
        }
    }

    public function render()
    {
        return view('livewire.laravel-examples.members');
    }
}
