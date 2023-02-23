@component('mail::message')
# Dear {{ ucwords($mail['name']) }},

Thanks for reaching out to Teddius.
Your email with the subject "{{ $mail['subject'] }}" has been received and is being acted upon.
Teddius will reach out to you shortly

@component('mail::button', ['url' => route('home') ])
Teddius Maingi
@endcomponent

Thanks and Regards,<br>
{{ config('app.name') }}
@endcomponent
