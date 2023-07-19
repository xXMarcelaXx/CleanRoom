<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>{{$dia }}</h3>


    <form action="{{ route('borrar-registros') }}" method="POST" >
        @csrf
        <br>
        <br>
        <button type="submit" class="btn btn-danger btn-block" style=" left: 0; right: 0; top: 0; width: 100%;">Borrar todos los registros</button>
    </form>

    @role('Admin')
    <!-- Button trigger modal -->
    <button type="button"  id="botonEliminar"  data-toggle="modal" 
        data-target="#exampleModal">
        Eliminar registros
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ESTAS SEGURO DE ELIMINAR TODOS LOS REGISTROS DEL MES?</h5>
                    <form action="{{ route('borrar-registros') }}" method="POST" >
                        @csrf
                        <br>
                        <br>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
@endrole

</body>
</html>