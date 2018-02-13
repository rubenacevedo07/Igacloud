@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# 
@else
# 
@endif
@endif

{{-- Intro Lines --}}
Recibiste este mail luego de solicitar el reseteo de tu contraseña en nuestra app móvil., <br>
                Clickee en el botón de abajo para cambiar su contraseña:,

{{-- Action Button --}}
@if (isset($actionText))
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
Resetear Contraseña
@endcomponent
@endif

{{-- Outro Lines --}}
Si no solicitaste resetear la contraseña contáctate con nosotros.

<!-- Salutation -->
@if (! empty($salutation))
{{ $salutation }}
@else
Saludos cordiales,<br>{{ config('app.name') }}
@endif

<!-- Subcopy -->
@if (isset($actionText))
@component('mail::subcopy')
Si estas teniendo problemas clickeando el botón "Resetear Contraseña",
 copia y pega esta URL en tu navegador: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endif
@endcomponent
