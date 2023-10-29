<?php

namespace App\Livewire;

use App\Models\LampSwitch;
use Livewire\Component;

class LampComponent extends Component
{
    public $status;
    public $statusProperty;
    public function render()
    {
        return view('livewire.lamp-component');
    }
    public function render2()
    {
        return view('livewire.switch', [
            $lamp = LampSwitch::where('id', 1)->first(),
            $this->status = $lamp->is_active,
            'status' => $this->status,
        ]);
    }
    public function mount()
    {
        $lamp = LampSwitch::where('id', 1)->first();
        $this->status = $lamp->is_active;
        $this->statusProperty = $lamp->is_active ? 'On' : 'Off';
    }
    public function turnOn()
    {
        LampSwitch::where('id', 1)->update([
            'is_active' => 1,
        ]);
        $this->status = 1;
        $this->statusProperty = 'Off';
    }
    public function turnOff()
    {
        LampSwitch::where('id', 1)->update([
            'is_active' => 0,
        ]);
        $this->status = 0;
        $this->statusProperty = 'On';
    }
    public function toggleButton()
    {
        if ($this->status === 1) {
            $this->turnOff();
        } else {
            $this->turnOn();
        }
    }
}
