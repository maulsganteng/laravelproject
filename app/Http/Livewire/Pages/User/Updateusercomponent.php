<?php

namespace App\Http\Livewire\Pages\User;

use App\Models\Userr;
use Livewire\Component;

class Updateusercomponent extends Component
{
    public $employe;
    public $username;
    public $email;
    public $password;
    public $userId;
    public $finduser;


    public function mount($userId)
    {
        $this->finduser = Userr::findOrFail($this->userId);
        $this->employe = $this->finduser->employe;
        $this->username = $this->finduser->username;
        $this->email = $this->finduser->email;
        $this->password = $this->finduser->password;
    }
    protected $rules = [
        'employe' => 'required|min:1',
        'username' => 'required|min:1',
        'email' => 'required|min:1',
        'password' => 'required|min:1',

    ];
    public function Update()
    {
        $this->validate();
        $updateuser = Userr::find($this->userId);
        $updateuser->Update([

            'employe' => $this->employe,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        return redirect(route("user"));
        session()->flash('message', 'Post successfully ucreated.');
    }
    public function render()
    {
        return view('livewire.pages.user.updateusercomponent')->layout("template.app");
    }
}
