@component('mail::message')
# Introduction

Welcome to the Digital Biolab. Are you ready to track your learning progress?

@component('mail::button', ['url' => 'http://localhost:8080/about'])
Enter the Digital Biolab
@endcomponent

@component('mail::panel', ['url' => 'http://localhost:8080/about'])
Big Ideas, Enduring Understandings and Essential Knowledge Statements. 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
