<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Modal extends Component
{
    public $simpleModel = false;

    #[On('post-created')]
    public function updatePostList()
    {
        $this->simpleModel = true;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
