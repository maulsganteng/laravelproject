<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ProjectComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.project-component')->layout("template.app");
    }
}
