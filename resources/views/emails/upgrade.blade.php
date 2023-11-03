<x-mail::message>
# Dear {{ $user->username }}

I hope this message finds you well. We wanted to acknowledge that we have received your request for a package upgrade, and we are thrilled to assist you with this process.
Your request for an upgrade is an important step towards tailoring our services to better meet your specific needs.

Once again, we appreciate your choice to upgrade your package with us. We look forward to enhancing your experience and ensuring that you continue to receive top-notch services from Saxotrade Investment Company

Thank you for being a valued member of our community, and we're excited to embark on this journey with you.



@component('mail::button', ['url' => route('login')])
View Dashboard
@endcomponent

Warm regards,<br>
{{ config('app.name') }}
</x-mail::message>
