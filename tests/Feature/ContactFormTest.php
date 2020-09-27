<?php

namespace Tests\Feature;

use App\Http\Livewire\ContactForm;
use App\Mail\ContactFormMail;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function contact_form_page_contains_contact_form_livewire()
    {
        $this->signIn();

        $this
        	->get('contact-form')
        	->assertSeeLivewire('contact-form');
    }

    /** @test */
    public function contact_form_sends_out_an_email()
    {
        Mail::fake();

        $to = $this->faker->email();

        Livewire::test(ContactForm::class)
            ->set('name', $this->faker->name())
            ->set('email', $to)
            ->set('phone', $this->faker->numberBetween(1000000, 999999999))
            ->set('message', $this->faker->text())
            ->call('submitForm')
            ->assertSee('We received your message successfully and will get back to you shortly!');

        Mail::assertSent(function(ContactFormMail $mail) use ($to) {
            $mail->build();

            return $mail->hasTo($to) &&
                $mail->hasFrom('contact@example.com') &&
                Str::contains($mail->subject, "Contact Form #");
        });
    }

    /** @test */
    public function contact_form_name_field_is_required()
    {
        $this->withoutExceptionHandling();
        
        Livewire::test(ContactForm::class)
            ->set('email', $this->faker->email())
            ->set('phone', $this->faker->numberBetween(1000000, 999999999))
            ->set('message', $this->faker->text())
            ->call('submitForm')
            ->assertHasErrors(['name' => 'required']);
    }

    /** @test */
    public function contact_form_message_field_has_min_10_characters()
    {
        $this->withoutExceptionHandling();
        
        Livewire::test(ContactForm::class)
            ->set('name', $this->faker->name())
            ->set('email', $this->faker->email())
            ->set('phone', $this->faker->numberBetween(1000000, 999999999))
            ->set('message', Str::random(9))
            ->call('submitForm')
            ->assertHasErrors(['message' => 'min']);
    }
}
