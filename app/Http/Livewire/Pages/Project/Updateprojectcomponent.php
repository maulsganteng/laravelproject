<?php

namespace App\Http\Livewire\Pages\Project;

use App\Models\project;
use Livewire\Component;

class Updateprojectcomponent extends Component
{
    public $project;
    public $projectname;
    public $location;
    public $startingdate;
    public $deadlinedate;
    public $findproject;
    public $projectId;


    public function mount($projectId)
    {
        $this->findproject = project::findOrFail($this->projectId);
        $this->project = $this->findproject->project;
        $this->location = $this->findproject->location;
        $this->projectname = $this->findproject->projectname;
        $this->startingdate = $this->findproject->startingdate;
        $this->deadlinedate = $this->findproject->deadlinedate;
    }
    protected $rules = [
        'project' => 'required|min:1',
        'projectname' => 'required|min:1',
        'location' => 'required|min:1',
        'startingdate' => 'required|min:1',
        'deadlinedate' => 'required|min:1',

    ];
    public function Update()
    {
        $this->validate();
        $updateproject = project::find($this->projectId);
        $updateproject->Update([

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
        return view('livewire.pages.project.updateprojectcomponent')->layout("template.app");
    }
}
