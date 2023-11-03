<x-mail::message>
# Dear {{ $user->username }}

Welcome to Saxotrade Investment Company! We're excited to have you join our community.

We believe that you're going to love it here, and we're here to help you every step of the way.

Thank you for choosing Saxotrade Investment Company. We're here to make your experience enjoyable and rewarding.

If you have any feedback or suggestions, we'd love to hear from you. Your input is invaluable in helping us improve.

@component('mail::button', ['url' => route('index')])
Contact Us
@endcomponent

Best Regards, <br>
{{ config('app.name') }}
</x-mail::message>
