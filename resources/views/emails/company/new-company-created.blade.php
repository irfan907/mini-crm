@component('mail::message')
# New Company Created

@component('mail::panel') <br>
<strong>Name:</strong>  {{ $company->name }} <br>
<strong>Email:</strong>  {{ $company->email }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
