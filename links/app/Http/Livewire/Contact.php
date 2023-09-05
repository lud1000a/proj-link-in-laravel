<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $email = '';
    public $pass = '';

    public $data = [];

    public function submit() {
        $this->data = [
            'email' => $this->email,
            'pass' => $this->pass,
        ];
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
