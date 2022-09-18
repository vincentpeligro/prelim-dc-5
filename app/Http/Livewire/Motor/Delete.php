<?php

namespace App\Http\Livewire\Motor;
use App\Models\Motor;
use Livewire\Component;

class Delete extends Component
{

    public $motorId;



    public function getMotorProperty(){
        return Motor::find($this->motorId);
    }

    public function render()
    {
        return view('livewire.motor.delete');
    }
    public function delete() {
        $this->motor->delete();

        return redirect('/dashboard')->with('message', $this->motor->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
