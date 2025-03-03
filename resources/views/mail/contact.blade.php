@component('mail::message')
# Nuevo Mensaje de Contacto 📩

Has recibido un nuevo mensaje a través del formulario de contacto.

### Detalles del Mensaje:
- **Nombre:** {{ $data['name'] }}
- **Correo:** {{ $data['email'] }}
- **Asunto:** {{ $data['subject'] }}

### Mensaje:
{{ $data['message'] }}

Gracias,<br>
**{{ config('app.name') }}**
@endcomponent
