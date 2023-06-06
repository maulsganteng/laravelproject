<?php

namespace App\Http\Livewire\Pages\Employe;

use Livewire\Component;

class CreateComponent extends Component
{
    public $fisrtname;
    public $middlename;
    public $lastname;
    protected $rules = [
        'name' => 'required|min:6',
        
    ];
    public function craete()
    {

    }
    public function render()
    {
        return view('livewire.pages.employe.create-component')-> layout("template.app");
    }
}
