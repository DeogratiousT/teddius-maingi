@component('mail::message')

{{ $mail['content'] }}

Regards, <br>
{{ $mail['name'] }} <br>
{{ $mail['email'] }}

@endcomponent
