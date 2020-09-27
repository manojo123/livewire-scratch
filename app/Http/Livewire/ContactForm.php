<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
	public $name;
	public $email;
	public $phone;
	public $message;

	public $successMessage;

	protected $rules = [
		'name' => 'required',
		'email' => 'required|email',
		'phone' => 'required|numeric',
		'message' => 'required|min:10',
	];

	public function updated($propertyName)
	{
		$this->validateOnly($propertyName);
	}

	public function submitForm()
	{
		$contact = $this->validate();

		Mail::to($this->email)->send(new ContactFormMail($contact));

		$this->resetForm();

		$this->successMessage = 'We received your message successfully and will get back to you shortly!';
	}

	public function resetForm()
	{
		/* 
		$this->name = '';
		$this->email = '';
		$this->phone = '';
		$this->message = '';
		*/

		$this->reset();
	}

    public function render()
    {
        return view('livewire.contact-form');
    }
}
