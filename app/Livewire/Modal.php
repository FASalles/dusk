<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Modal extends Component
{
    public $text = '';

    public function pressButton()
    {
        $this->text = '12312321231321321';
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
