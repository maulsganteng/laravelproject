<?php

namespace App\Http\Livewire\Pages\Project;

use App\Models\project;
use Livewire\Component;

class Createprojectcomponent extends Component
{
    public $project;
    public $projectname;
    public $location;
    public $startingdate;
    public $deadlinedate;

    protected $rules = [
        'project' => 'required|min:1',
        'projectname' => 'required|min:1',
        'location' => 'required|min:1',
        'startingdate' => 'required|min:1',
        'deadlinedate' => 'required|min:1',

    ];
    public function create()
    {
        $this->validate();

        project::create([
            'project' => $this->project,
            'projectname' => $this->projectname,
            'location' => $this->location,
            'startingdate' => $this->startingdate,
            'deadlinedate' => $this->deadlinedate,

        ]);
        return redirect(route("project"));
        session()->flash('message', 'Post successfully ucreated.');
    }


    public function render()
    {
        return view('livewire.pages.project.createprojectcomponent')->layout("template.app");
    }
}
