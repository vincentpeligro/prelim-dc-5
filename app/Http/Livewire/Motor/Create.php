<?php

namespace App\Http\Livewire\Motor;

use App\Models\Motor;
use Livewire\Component;

class Create extends Component
{
    public $name,$model,$price;

    public function addHero(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'model'             => ['required'],
                'price'           => ['required','string','max:255'],
            ]);

            Motor::create([
                'name'        => $this->name,
                'model'             => $this->model,
                'price'           => $this->price,
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
        return view('livewire.motor.create');
    }
}
