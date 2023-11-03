<x-mail::message>
# Reset Your Password

Hello there,

We received a request to reset your password. To complete the process, please click the button below:

@component('mail::button', ['url' => route('reset_password')])
Reset Password
@endcomponent


If you did not make this request, you can safely ignore this email.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
