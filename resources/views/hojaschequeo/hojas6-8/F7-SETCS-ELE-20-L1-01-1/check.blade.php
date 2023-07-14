<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-20-L1-01-1 T2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <style>
.fijar {
  /* Fija los encabezados de la tabla en la parte superior */
  position: sticky;
  left: 0;
  z-index: 1;
}
</style>
</head>

<body id="vistas">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <img src="/images/R.png" alt="" id="logoborg">
                <h3>Registro</h3>
                <div>                    
                @auth                    
                <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
                auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
                <a href="/F7-SETCS-ELE-20-L1-01-1T2" class="btn btn-info" style="color: white">Volver</a>
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a> 
                @endauth                       
                </div>
            </div>
        </nav>
        <br>
    </div>
    <div class="table-responsive">
        <div class="table-responsive" align="center">

            <table class="table table-success table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">parametros turno</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th>31</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">CADA DIA (Al inicio del turno)</p>
                            </th>
                        </tr>
                        @foreach ($registros as $key=>$registro)
                        <form action="{{route('finalcheckSETCS20T2',$registro->id)}}" method="POST">                            
                            @if ($registro->turno == '2' &&
                                $registro->documentoid == 'F7-SETCS-ELE-20-L1-01-1' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'cumple')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                    <td>
                                        @php
                                            $fieldName = "registro[{$key}][d{$i}]";
                                            $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                        @endphp
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}"  value="Cumple" {{ $registro->{"d{$i}"} == 'Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Cumple" {{ $registro->{"d{$i}"} == 'No Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Aplica" {{ $registro->{"d{$i}"} == 'No Aplica' ? 'checked' : '' }} @if($disabled) disabled @endif> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="NP" {{ $registro->{"d{$i}"} == 'NP' ? 'checked' : '' }} @if($disabled) disabled @endif> NP
                                        </label>
                                    
                                    </td>
                                    @endfor
                                </tr>
                            @endif
                            @if ($registro->turno == '2' &&
                                $registro->documentoid == 'F7-SETCS-ELE-20-L1-01-1' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'rango')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @php
                                                $fieldName = "registro[{$key}][d{$i}]";
                                                $disabled = !($dia >= $i - 1 && $dia <= $i + 1);

                                            @endphp
                                            <input type="tel" step="0.01" size='15' name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
                            
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                            @if ($registro->turno == '2' &&
                                $registro->documentoid == 'F7-SETCS-ELE-20-L1-01-1' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'texto')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @php
                                                $fieldName = "registro[{$key}][d{$i}]";
                                                $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                            @endphp
                                            <input type="text" size="15" name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
                                        </td>
                                    @endfor
                                </tr>
                                </tr>
                            @endif
                        @endforeach  
                        <tr>                             
                    </tbody>
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary" id="miBoton">Guardar Cambios</button>
                        </form>
            </table>
            <br><br><br><br><br><br><br><br>

        </div>
</body>
</html>