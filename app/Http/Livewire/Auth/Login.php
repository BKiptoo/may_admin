<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
    }

    public function login()
    {
//        dd(200);
//        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            return redirect()->intended('/dashboard');
        } else {
            $this->addError('email', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
