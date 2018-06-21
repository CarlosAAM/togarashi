@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Whoops!
@else
# Hola!
@endif
@endif

{{-- Intro Lines --}}
{{ "Recibes este correo ya que tenemos una solicitud de tu cuenta para cambiar tu contraseña." }}

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ "Cambiar Contraseña" }}
@endcomponent
@endisset

{{-- Outro Lines --}}
{{ "Si tu no realizaste la solicitud, haz caso omiso de este correo." }}

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
Saludos,<br>{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
Si tienes problemas con el link del botón "{{ "Cambiar Contraseña" }}", copia y pega la siguiente dirección en tu navegador: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endisset
@endcomponent
