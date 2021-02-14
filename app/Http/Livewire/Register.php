<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Livewire\Component;

class Register extends Component
{
    public $name = "";

    public $email = "";

    public $password = "";

    public $password_confirmation = "";

    protected $guard;


    public function render()
    {
        return view('livewire.register');
    }

    public function store(Request $request)
    {

        // dd($request);
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }

}
