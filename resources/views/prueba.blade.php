<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .contenedor {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh; /* Ajusta la altura según tus necesidades */
        }
      </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">       
    <form>
        <h3>Muestras</h3>
        <br>
        <h3>{{$dia }}</h3>

        @if ($dia >= 5)
        <div>
            <input type="radio" class="btn-check" name="prueba3" id="option1" autocomplete="off" {{ $registro == 'Cumple' ? 'checked' : '' }}>
            <label class="btn btn-outline-success btn-sm" for="option1">Cumple</label>

            
            <input type="radio" class="btn-check" name="prueba3" id="option2" autocomplete="off" {{ $registro == 'No Cumple' ? 'checked' : '' }}>
            <label class="btn btn-outline-danger btn-sm" for="option2">No cumple</label>

            <input type="radio" class="btn-check" name="prueba3" id="option3" autocomplete="off" {{ $registro == 'No Aplica' ? 'checked' : '' }}>
            <label class="btn btn-outline-dark btn-sm" for="option3">No aplica</label>

            <input type="radio" class="btn-check" name="prueba3" id="option4" autocomplete="off" {{ $registro == 'NP' ? 'checked' : '' }}>
            <label class="btn btn-outline-warning btn-sm" for="option4">NP</label>
        </div>
        <br><br>
        
        @else
        <div>
            <input type="radio" class="btn-check" name="prueba3" id="option1" autocomplete="off" >
            <label class="btn btn-outline-success btn-sm" for="option1">Cumple</label>

            
            <input type="radio" class="btn-check" name="prueba3" id="option2" autocomplete="off" >
            <label class="btn btn-outline-danger btn-sm" for="option2">No cumple</label>

            <input type="radio" class="btn-check" name="prueba3" id="option3" autocomplete="off">
            <label class="btn btn-outline-dark btn-sm" for="option3">No aplica</label>

            <input type="radio" class="btn-check" name="prueba3" id="option4" autocomplete="off" >
            <label class="btn btn-outline-warning btn-sm" for="option4">NP</label>
        </div>

        @endif


        @if ($dia == 1 or $dia == 2)
        <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_1" value="Cumple" autocomplete="off" {{ $registro->d1 == 'Cumple' ? 'checked' : '' }}>
        <label class="btn btn-outline-success btn-sm" for="option{{ $key }}_1">Cumple</label>
                                            
        <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_2" value="No Cumple" autocomplete="off" {{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}>
        <label class="btn btn-outline-danger btn-sm" for="option{{ $key }}_2">No cumple</label>
                                            
        <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_3" value="No Aplica" autocomplete="off" {{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}>
        <label class="btn btn-outline-dark btn-sm" for="option{{ $key }}_3">No aplica</label>
                                            
        <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_4" value="NP" autocomplete="off" disabled {{ $registro->d1 == 'NP' ? 'checked' : '' }}>
        <label class="btn btn-outline-warning btn-sm" for="option{{ $key }}_4">NP</label>  
        @else
        <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_1" value="Cumple" autocomplete="off" disabled {{ $registro->d1 == 'Cumple' ? 'checked' : '' }}>
        <label class="btn btn-outline-success btn-sm" for="option{{ $key }}_1">Cumple</label>
                                            
        <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_2" value="No Cumple" autocomplete="off" disabled {{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}>
        <label class="btn btn-outline-danger btn-sm" for="option{{ $key }}_2">No cumple</label>
                                            
        <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_3" value="No Aplica" autocomplete="off" disabled {{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}>
        <label class="btn btn-outline-dark btn-sm" for="option{{ $key }}_3">No aplica</label>
                                            
        <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_4" value="NP" autocomplete="off" disabled {{ $registro->d1 == 'NP' ? 'checked' : '' }}>
        <label class="btn btn-outline-warning btn-sm" for="option{{ $key }}_4">NP</label>                  
        @endif

    
    </div>


    @if ($dia == 31 || $dia == 1 || $dia == 2)
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_1" value="Cumple" autocomplete="off" {{ $registro->d1 == 'Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-success btn-sm" for="option{{ $key }}_1">Cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_2" value="No Cumple" autocomplete="off" {{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-danger btn-sm" for="option{{ $key }}_2">No cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_3" value="No Aplica" autocomplete="off" {{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}>
    <label class="btn btn-outline-dark btn-sm" for="option{{ $key }}_3">No aplica</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_4" value="NP" autocomplete="off"  {{ $registro->d1 == 'NP' ? 'checked' : '' }}>
    <label class="btn btn-outline-warning btn-sm" for="option{{ $key }}_4">NP</label>  
   
    @else

    <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_1" value="Cumple" autocomplete="off" disabled {{ $registro->d1 == 'Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-success btn-sm" for="option{{ $key }}_1">Cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_2" value="No Cumple" autocomplete="off" disabled {{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-danger btn-sm" for="option{{ $key }}_2">No cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_3" value="No Aplica" autocomplete="off" disabled {{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}>
    <label class="btn btn-outline-dark btn-sm" for="option{{ $key }}_3">No aplica</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d1]" id="option{{ $key }}_4" value="NP" autocomplete="off" disabled {{ $registro->d1 == 'NP' ? 'checked' : '' }}>
    <label class="btn btn-outline-warning btn-sm" for="option{{ $key }}_4">NP</label>                  
    
    @endif                                                                   
</td>
<td>
    @if ($dia == 1 || $dia == 2 || $dia == 3)
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d2]" id="option{{ $key }}_1" value="Cumple" autocomplete="off" {{ $registro->d2 == 'Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-success btn-sm" for="option{{ $key }}_1">Cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d2]" id="option{{ $key }}_2" value="No Cumple" autocomplete="off" {{ $registro->d2 == 'No Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-danger btn-sm" for="option{{ $key }}_2">No cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d2]" id="option{{ $key }}_3" value="No Aplica" autocomplete="off" {{ $registro->d2 == 'No Aplica' ? 'checked' : '' }}>
    <label class="btn btn-outline-dark btn-sm" for="option{{ $key }}_3">No aplica</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d2]" id="option{{ $key }}_4" value="NP" autocomplete="off"  {{ $registro->d2 == 'NP' ? 'checked' : '' }}>
    <label class="btn btn-outline-warning btn-sm" for="option{{ $key }}_4">NP</label>  
   
    @else

    <input type="radio" class="btn-check" name="registro[{{ $key }}][d2]" id="option{{ $key }}_1" value="Cumple" autocomplete="off" disabled {{ $registro->d2 == 'Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-success btn-sm" for="option{{ $key }}_1">Cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d2]" id="option{{ $key }}_2" value="No Cumple" autocomplete="off" disabled {{ $registro->d2 == 'No Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-danger btn-sm" for="option{{ $key }}_2">No cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d2]" id="option{{ $key }}_3" value="No Aplica" autocomplete="off" disabled {{ $registro->d2 == 'No Aplica' ? 'checked' : '' }}>
    <label class="btn btn-outline-dark btn-sm" for="option{{ $key }}_3">No aplica</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d2]" id="option{{ $key }}_4" value="NP" autocomplete="off" disabled {{ $registro->d2 == 'NP' ? 'checked' : '' }}>
    <label class="btn btn-outline-warning btn-sm" for="option{{ $key }}_4">NP</label>                  
    
    @endif 
</td>
<td>
    @if ($dia == 2 || $dia == 3 || $dia == 4)
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d3]" id="option{{ $key }}_1" value="Cumple" autocomplete="off" {{ $registro->d3 == 'Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-success btn-sm" for="option{{ $key }}_1">Cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d3]" id="option{{ $key }}_2" value="No Cumple" autocomplete="off" {{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-danger btn-sm" for="option{{ $key }}_2">No cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d3]" id="option{{ $key }}_3" value="No Aplica" autocomplete="off" {{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}>
    <label class="btn btn-outline-dark btn-sm" for="option{{ $key }}_3">No aplica</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d3]" id="option{{ $key }}_4" value="NP" autocomplete="off"  {{ $registro->d3 == 'NP' ? 'checked' : '' }}>
    <label class="btn btn-outline-warning btn-sm" for="option{{ $key }}_4">NP</label>  
   
    @else

    <input type="radio" class="btn-check" name="registro[{{ $key }}][d3]" id="option{{ $key }}_1" value="Cumple" autocomplete="off" disabled {{ $registro->d3 == 'Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-success btn-sm" for="option{{ $key }}_1">Cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d3]" id="option{{ $key }}_2" value="No Cumple" autocomplete="off" disabled {{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}>
    <label class="btn btn-outline-danger btn-sm" for="option{{ $key }}_2">No cumple</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d3]" id="option{{ $key }}_3" value="No Aplica" autocomplete="off" disabled {{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}>
    <label class="btn btn-outline-dark btn-sm" for="option{{ $key }}_3">No aplica</label>
                                        
    <input type="radio" class="btn-check" name="registro[{{ $key }}][d3]" id="option{{ $key }}_4" value="NP" autocomplete="off" disabled {{ $registro->d3 == 'NP' ? 'checked' : '' }}>
    <label class="btn btn-outline-warning btn-sm" for="option{{ $key }}_4">NP</label>                  
    
    @endif 


    <select name="registro[{{$key}}][d1]" id="d1">
        <option value="{{$registro->d1}}">{{$registro->d1}}</option>
        <option value="-">-</option>
        <option value="Cumple">Cumple</option>
        <option value="No Cumple">No Cumple</option>
        <option value="No Aplica">No Aplica</option>
    </select>



    @if ($dia == 31 || $dia == 1 || $dia == 2)
    <label>
        <input type="radio" name="registro[{{$key}}][d1]" id="d1" value="Cumple" {{ $registro->d3 == 'Cumple' ? 'checked' : '' }}> Cuemple
    </label>
    <label>
        <input type="radio" name="registro[{{$key}}][d1]" id="d1" value="No Cumple" {{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}> No Cumple
    </label>
    <label>
        <input type="radio" name="registro[{{$key}}][d1]" id="d1" value="No Aplica" {{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}> No Aplica
    </label>
    <label>
        <input type="radio" name="registro[{{$key}}][d1]" id="d1" value="NP" {{ $registro->d3 == 'NP' ? 'checked' : '' }}> NP
    </label>
    @else
    <label>
        <input type="radio" name="registro[{{$key}}][d1]" id="d1" value="Cumple" {{ $registro->d3 == 'Cumple' ? 'checked' : '' }}> Cuemple
    </label>
    <label>
        <input type="radio" name="registro[{{$key}}][d1]" id="d1" value="No Cumple" {{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}> No Cumple
    </label>
    <label>
        <input type="radio" name="registro[{{$key}}][d1]" id="d1" value="No Aplica" {{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}> No Aplica
    </label>
    <label>
        <input type="radio" name="registro[{{$key}}][d1]" id="d1" value="NP" {{ $registro->d3 == 'NP' ? 'checked' : '' }}> NP
    </label>
    @endif








    <br><br>
    </form>
    </div>



    <td>
        @if ($dia == 30 || $dia == 31 || $dia == 1)
        <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
        @else
        <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}" disabled>
        @endif
    </td>


    <tr>
        <td>{{ $registro->criterio }}</td>
        @for ($i = 1; $i <= 31; $i++)
            <td>
                @php
                    $fieldName = "registro[{$key}][d{$i}]";
                    $disabled = !($dia >= $i && $dia <= $i + 2);
                @endphp
                <input type="text" size="15" name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
            </td>
        @endfor
    </tr>


    <td>                                    
        @if ($dia == 31 || $dia == 1 || $dia == 2)
        <label>
            <input type="radio" name="registro[{{$key}}][d1]"  value="Cumple" {{ $registro->d1 == 'Cumple' ? 'checked' : '' }}> Cumple
        </label>
        <label>
            <input type="radio" name="registro[{{$key}}][d1]" value="No Cumple" {{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}> No Cumple
        </label>
        <label>
            <input type="radio" name="registro[{{$key}}][d1]" value="No Aplica" {{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}> No Aplica
        </label>
        <label>
            <input type="radio" name="registro[{{$key}}][d1]" value="NP" {{ $registro->d1 == 'NP' ? 'checked' : '' }}> NP
        </label>
        @else
        <label>
            <input type="radio" name="registro[{{$key}}][d1]" value="Cumple" disabled{{ $registro->d1 == 'Cumple' ? 'checked' : '' }}> Cumple
        </label>
        <label>
            <input type="radio" name="registro[{{$key}}][d1]"  value="No Cumple" disabled{{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}> No Cumple
        </label>
        <label>
            <input type="radio" name="registro[{{$key}}][d1]"  value="No Aplica" disabled{{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}> No Aplica
        </label>
        <label>
            <input type="radio" name="registro[{{$key}}][d1]" value="NP" disabled{{ $registro->d1 == 'NP' ? 'checked' : '' }}> NP
        </label>
        @endif                                                                  
    </td>


    <tr>
        <td>{{ $registro->criterio }}</td>
        @for ($i = 1; $i <= 31; $i++)
            <td>
                @php
                    $fieldName = "registro[{$key}][d{$i}]";
                    $disabled = !($dia >= $i && $dia <= $i + 2);
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



    <td>
        @if ($dia == 31 || $dia == 1 || $dia == 2)
        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
        @else
        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}" disabled>
        @endif
    </td>


    <tr>
        <td>{{ $registro->criterio }}</td>
        @for ($i = 1; $i <= 31; $i++)
            <td>
                @php
                    $fieldName = "registro[{$key}][d{$i}]";
                    $disabled = !($dia >= $i && $dia <= $i + 2);
                @endphp
                <input type="tel" step="0.01" size='15' name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>

            </td>
        @endfor
    </tr>




    <tr>
        <td class="fijar">{{ $registro->criterio }}</td>
        @for ($i = 1; $i <= 31; $i++)
            <td>
                @if ($registro["d{$i}"] == 'Cumple')
                  <p style="color: green">{{ $registro["d{$i}"] }}</p>
                @else
                  <p style="color: red">{{ $registro["d{$i}"] }}</p>
                @endif
            </td>
        @endfor
    </tr>

    <td>{{ $registro->criterio}}, {{$registro->valor1}}, {{$registro->valor2}}</td>
    @for ($i = 1; $i <= 31; $i++)
        <td>
            @if ($registro["d{$i}"] >= $registro->valor1 && $registro["d{$i}"] <= $registro->valor2)
              <p style="color: green">{{ $registro["d{$i}"] }}</p>
            @else
              <p style="color: red">{{ $registro["d{$i}"] }}</p>
            @endif
        </td>
    @endfor



    <td class="fijar">{{ $registro->criterio }}</td>
    @for ($i = 1; $i <= 31; $i++)
        <td>
            <p>{{ $registro["d{$i}"] }}</p>
        </td>
    @endfor


    <td class="fijar">{{ $registro->criterio }}</td>
    @for ($i = 1; $i <= 31; $i++)
        <td>
            <p>{{ $registro["d{$i}"] }}</p>
        </td>
    @endfor

</body>

</html>
