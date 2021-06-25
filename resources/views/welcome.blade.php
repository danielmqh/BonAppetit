<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bon Appetit</title>
    </head>
    <body>
        <h1>Exportar datos</h1>
        <p>
            Clic <a href="{{ route('users.pdf') }}">aquí</a>
            para descargar en PDF a los usuarios
        </p>
        <p>
            Clic <a href="{{ route('reservas.pdf') }}">aquí</a>
            para descargar en PDF a las reservas
        </p>
        <p>
            Clic <a href="{{ route('pedidos.pdf') }}">aquí</a>
            para descargar en PDF a los pedidos
        </p>
        <p>
            Clic <a href="{{ route('clientes.pdf') }}">aquí</a>
            para descargar en PDF a los clientes
        </p>
        <p>
            Clic <a href="{{ route('proveedores.pdf') }}">aquí</a>
            para descargar en PDF a los proveedores
        </p>

        <form action="{{ route('users.import.excel') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="file">

            <button>Importar Usuarios</button>
        </form>
    </body>
</html>










