@component('mail::message')
# You Submitted a Form!
<br>

<p><b>Name</b>: {{ $contact["name"] }} </p>
<p><b>Email</b>: {{ $contact["email"] }} </p>
<p><b>Phone</b>: {{ $contact["phone"] }} </p>
<p><b>Message</b>: {{ $contact["message"] }}</p>
<br>

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
