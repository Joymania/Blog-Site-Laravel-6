@component('mail::message')
# Introduction

Hey {{ $username }} Thank u for Subscribing

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
