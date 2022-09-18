<?php

namespace App\Http\Livewire\Motor;

use App\Models\Motor;
use Livewire\Component;

class Index extends Component
{
    public function loadMotor() {
        $motor = Motor::orderBy('name')->get();

        return compact('motor');
    }

    public function render()
    {
        return view('livewire.motor.index', $this->loadMotor());
    }
}
