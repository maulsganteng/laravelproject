<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginComponent extends Component
{
    public $email;
    public $password;
    protected $rules = [
        'password' => 'required',
        'email' => 'required|email',
    ];
    public function handleLogin()
    {

        $this->validate(); // validasi dari protected $rules wajib di isikan

        $credentials = [
            'email' => $this->email, // melakukan input email
            'password' => $this->password // melakukan input password
        ];
        if (Auth::attempt($credentials)) { // dilakukan kondisi auth default berasal dari table users
            // jika validasi if berhasil maka login, jika gagal maka masuk ke else
            session()->flash('message', 'Successfully login with your account!');
            return redirect(route("dashboard"));
        } else {
            // notifikasi jika gagal
            session()->flash('error', 'Something wrong credentials!');
            return redirect(back());
        }
    }
    public function render()
    {
        return view('livewire.pages.login-component')->layout("template.auth");
    }
}
