<?php

namespace App\Http\Livewire\Heroes;
use App\Models\Hero;
use Livewire\Component;

class Edit extends Component
{

    public $heroId;
    public $name,$type,$damage;


    public function mount(){


        $this->name = $this->hero->name;
        $this->type = $this->hero->type;
        $this->damage = $this->hero->damage;

    }

    public function editHero()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'damage'             => ['required'],
            'type'           => ['required','string','max:255'],
        ]);

        $this->hero->update([
            'name'=> $this->name,
            'type'=> $this->type,
            'damage'=> $this->damage,
        ]);

        return redirect('/dashboard')->with('message', $this->hero->name .' updated successfully');
    }


    public function getHeroProperty(){
        return Hero::find($this->heroId);
    }

    public function render()
    {
        return view('livewire.heroes.edit');
    }
}
