@component('mail::message')
# Introduction

The body of your message.

Welcome to Laravel Recruit {{ $user->name }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
