<?php

namespace App\Http\Livewire\Pages\User;

use App\Models\Userr;
use Livewire\Component;

class Createusercomponent extends Component
{
    public $employe;
    public $username;
    public $email;
    public $password;

    protected $rules = [
        'employe' => 'required|min:1',
        'username' => 'required|min:1',
        'email' => 'required|min:1',
        'password' => 'required|min:1',

    ];
    public function create()
    {
        $this->validate();

        Userr::create([
            'employe' => $this->employe,
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),

        ]);
        return redirect(route('user'));
    }
    public function render()
    {
        return view('livewire.pages.user.createusercomponent')->layout("template.app");
    }
}
