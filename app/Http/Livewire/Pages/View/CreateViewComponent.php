<?php

namespace App\Http\Livewire\Pages\View;

use App\Models\View;
use Livewire\Component;

class CreateViewComponent extends Component
{
    public $name;
    public $dateupdate;
    public $progres;

    protected $rules = [
        'name' => 'required|1',
        'progres' => 'required|1',
        'dateupdate' => 'required|1',

    ];

    public function create()
    {
        $this->validate();

        View::create([
            'name'=>$this->name,
            'progres'=>$this->progres,
            'dateupdate'=>$this->dateupdate
        ]);
        return redirect(route('view'));

    }


    public function render()
    {
        return view('livewire.pages.view.create-view-component') -> layout("template.app");
    }
}
