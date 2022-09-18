<?php

namespace App\Http\Livewire\Heroes;
use App\Models\Hero;
use Livewire\Component;

class Delete extends Component
{

    public $heroId;



    public function getHeroProperty(){
        return Hero::find($this->heroId);
    }

    public function render()
    {
        return view('livewire.heroes.delete');
    }
    public function delete() {
        $this->hero->delete();

        return redirect('/dashboard')->with('message', $this->hero->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
