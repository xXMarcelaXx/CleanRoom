@extends('diseños.diseñoturnos')
@section('diseñomenus')
<br><br><br>
<h1 style="text-align: center; color:white; background-color:rgb(113, 113, 255)">hojas de chequeo turno 2</h1>
<br>
<h1 style="text-align: center; color:white; background-color:rgb(29, 29, 29)">Op. 40 PONCHADORA 3</h1>
<table class="table table-success table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">DocumentoID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Operacion</th>
            <th scope="col">#</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($turno68s as $turno68)
        @if($turno68->Operacion == '40'  && $turno68->Numero == 3)
        <tr>
            <td id="txtturno">{{$turno68->DocumentoID}}</td>
            <td>{{$turno68->Titulo}}</td>
            <td>{{$turno68->Descripcion}}</td>
            <td>{{$turno68->Operacion}}</td>
            <td>{{$turno68->Numero}}</td>
            <td>
                <form action="{{route('Turno2.destroy',$turno68->id)}}" method="POST" style="zoom: 1.2">
                @role('Admin')
                <a href="Turno2/{{$turno68->id}}/edit" style="color: white" class="btn btn-info" style="zoom: 1.2">Editar</a>
                @endrole
                @csrf
                @method('DELETE')
                <a href="{{$turno68->Ruta}}" class="btn btn-success" style="zoom: 1.2">Mostrar</a>
                @role('Admin')
                <button type="submit" class="btn btn-danger" style="zoom: 1.2">Eliminar</button>
                @endrole
                </form>         
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@csrf
<a href="Turno2/create" class="btn btn-primary">Crear</a>
@endsection