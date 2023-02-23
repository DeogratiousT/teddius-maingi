@component('mail::message')

{{ $mail['message'] }}

Regards, <br>
{{ $mail['name'] }} <br>
{{ $mail['email'] }}

@endcomponent
