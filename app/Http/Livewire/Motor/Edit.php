<?php

namespace App\Http\Livewire\Motor;
use App\Models\Motor;
use Livewire\Component;

class Edit extends Component
{

    public $motorId;
    public $name,$model,$price;


    public function mount(){


        $this->name = $this->motor->name;
        $this->model = $this->motor->model;
        $this->price = $this->motor->price;

    }

    public function editMotor()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'model'             => ['required'],
            'price'           => ['required','string','max:255'],
        ]);

        $this->motor->update([
            'name'=> $this->name,
            'model'=> $this->model,
            'price'=> $this->price,
        ]);

        return redirect('/dashboard')->with('message', $this->motor->name .' updated successfully');
    }


    public function getMotorProperty(){
        return Motor::find($this->motorId);
    }

    public function render()
    {
        return view('livewire.motor.edit');
    }
}
