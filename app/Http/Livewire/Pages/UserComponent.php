<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class UserComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.user-component')->layout("template.app");
    }
}
