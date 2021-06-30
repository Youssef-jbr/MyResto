<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $prenom = '';

    /** @var string */
    public $rue = '';

    /** @var string */
    public $ville = '';

    /** @var integer */
    public $cp = '';

    /** @var integer */
    public $telephone = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';

    public function register()
    {
        $this->validate([
            'name' => ['required'],
            'prenom' => ['required'],
            'rue' =>['required'],
            'ville' =>['required'],
            'cp' =>['required'],
            'telephone' =>['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        $user = User::create([
            'email' => $this->email,
            'nom' => $this->name,
            'prenom'=>$this->prenom,
            'rue'=>$this->rue,
            'ville'=>$this->ville,
            'cp'=>$this->cp,
            'telephone'=>$this->telephone,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
