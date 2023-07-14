@extends('diseños.diseñoturnos')
@section('diseñomenus')
    <br><br><br>
    <h1 style="text-align: center; color:white; background-color:rgb(113, 113, 255)">hojas de chequeo turno 3</h1>
    <br>
    <h1 style="text-align: center; color:white; background-color:rgb(29, 29, 29)">Op. 120 Prensa 2</h1>
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
            @foreach ($turno3s as $turno3)
                @if ($turno3->Operacion == '120' && $turno3->Numero == 2)
                    <tr>
                        <td>{{ $turno3->DocumentoID }}</td>
                        <td>{{ $turno3->Titulo }}</td>
                        <td>{{ $turno3->Descripcion }}</td>
                        <td>{{ $turno3->Operacion }}</td>
                        <td>{{ $turno3->Numero }}</td>
                        <td>
                            <form action="{{ route('Turno3.destroy', $turno3->id) }}" method="POST" style="zoom: 1.2">
                                @role('Admin')
                                    <a href="Turno3/{{ $turno3->id }}/edit" style="color: white" class="btn btn-info"
                                        style="zoom: 1.2">Editar</a>
                                @endrole
                                @csrf
                                @method('DELETE')
                                <a href="{{ $turno3->Ruta }}" class="btn btn-success" style="zoom: 1.2">Mostrar</a>
                                @role('Admin')
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Eliminar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ESTAS SEGURO DE ELIMINAR ESTA
                                                        HOJA DE CHEQUEO?</h5>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-danger"
                                                        style="zoom: 1.2">ELIMINAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endrole
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    @role('Admin')
        <a href="Turno3/create" class="btn btn-primary">Crear</a>
    @endrole
@endsection
