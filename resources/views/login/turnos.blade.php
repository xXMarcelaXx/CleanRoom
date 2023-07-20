<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body id="vistas">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid">
                <img src="/images/R.png" alt="" id="logoborg">
                <div>                    
                @auth                    
                <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
                auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
                @endauth
                
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
                </div>
            </div>
</nav>
<br><br>
<div class="contenedor-turnos">
<a href="/operacionesTurno57" class="btn" id="boton57">Turno 1</a>  
<br><br>

<a href="/operacionesTurno68" class="btn" id="boton57">Turno 2</a>  
<br><br>

<a href="/operacionesTurno3" class="btn" id="boton57">Turno 3</a>  
<br><br>
@role('Admin')
<a href="registro" class="btn" id="boton68">Registrar usuario</a> 
<br><br>
<a href="cambiarFecha" class="btn" id="botonFecha">Cambiar mes y año</a> 
<br><br>
<a href="reportes" class="btn" id="botonReportes">Reportes</a> 
<br><br>
    <!-- Button trigger modal -->
    <a type="button" class="btn"  id="botonEliminar" data-toggle="modal" 
        data-target="#exampleModal">
        Eliminar registros
</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ESTAS SEGURO DE ELIMINAR TODOS LOS REGISTROS DEL MES?</h5><br><br> 
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
    <br><br> 
@endrole 
</div>
</body>
</html>