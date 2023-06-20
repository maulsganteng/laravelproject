<?php

namespace App\Http\Livewire\Pages\View;

use App\Models\View;
use Livewire\Component;

class UpdateViewComponent extends Component
{
    public $name;
    public $dateupdate;
    public $progres;
    public $viewId;
    public $findview;

    public function mount($viewId)
    {
        $this->findview = View::findOrFail($this->viewId);
        $this->name = $this->findview->project;
        $this->progres = $this->findview->location;
        $this->dateupdate = $this->findview->projectname;
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

        View::Update([
            'name' => $this->name,
            'progres' => $this->progres,
            'dateupdate' => $this->dateupdate
        ]);
        return redirect(route('view'));
    }

    public function render()
    {
        return view('livewire.pages.view.update-view-component')->layout("template.app");
    }
}
