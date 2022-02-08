@component('mail::message')
<div>
    <h2 class="text-center">SOLICITUD DE CITA</h2> 
    <h3 class="mt-2">DATOS DEL USUARIO</h3>
    <div>
        <ul>
            <li>
                <span class="fw-bold">Nombre: </span> <span> {{$data->name}} </span>
            </li>
            <li>
                <span class="fw-bold">Telefono: </span> <span> {{$data->phone}} </span>
            </li>
            <li>
                <span class="fw-bold">Email: </span> <span> {{$data->email}} </span>
            </li>
        </ul>
    </div>
    <div class="panel-content">
        <p>
            {{$data->message}}
        </p>
    </div>
    @if ($button)
        @component('mail::button', ['url' => $url])
            WhatsApp
        @endcomponent
    @endif
    @component('mail::footer')
    Esta es una notificación que se genero desde la página web.
    @endcomponent
</div>

@endcomponent