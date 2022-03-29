@component('mail::message')
    # Introduction

    Votre message a été envoyé avec succès.

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
