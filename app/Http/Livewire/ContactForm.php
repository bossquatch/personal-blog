<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $phone;
    public $message;
    public $success_message;

    public function render()
    {
        return view('livewire.contact-form');
    }
}
