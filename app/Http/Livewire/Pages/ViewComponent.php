<?php

namespace App\Http\Livewire\Pages;

use App\Models\View;
use Livewire\Component;

class ViewComponent extends Component
{
    public function destroy($viewId)
    {
        $findview = View::find($viewId);
        $findview->delete();
        return redirect(route("view"))->back();
        session()->flash('message' . $findview . 'Post successfully delete.');
    }
    public function render()
    {
        $view = view::query()->latest()->get();
        return view('livewire.pages.view-component', [
            'view' => $view
        ])->layout("template.app");
    }
}
