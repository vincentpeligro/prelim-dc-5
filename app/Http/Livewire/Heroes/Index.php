<?php

namespace App\Http\Livewire\Heroes;

use App\Models\Hero;
use Livewire\Component;

class Index extends Component
{
    public function loadHeroes() {
        $heroes = Hero::orderBy('name')->get();

        return compact('heroes');
    }

    public function render()
    {
        return view('livewire.heroes.index', $this->loadHeroes());
    }
}
