<?php

namespace App\Http\Livewire\Motor;

use App\Models\Motor;
use Livewire\Component;

class Create extends Component
{
    public $name,$type,$damage;

    public function addHero(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'type'             => ['required'],
                'damage'           => ['required','string','max:255'],
            ]);

            Hero::create([
                'name'        => $this->name,
                'type'             => $this->type,
                'damage'           => $this->damage,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }

    public function updated($propertyEmail)
    {
        // $this->validateOnly($propertyEmail, [
        //     'email'             => ['required','email','unique:students'],
        // ]);
    }

    public function render()
    {
        return view('livewire.heroes.create');
    }
}
