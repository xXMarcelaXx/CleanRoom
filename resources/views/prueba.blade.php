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
            <input type="radio" class="btn-check" name="prueba3" id="option1" autocomplete="off" {{ $registro->d1 == 'Cumple' ? 'checked' : '' }}>
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

        <div>
            <td>
                <input type="tel" step="0.01" size='15' name="registro" id="d1" tabindex="1" value="10">
            </td>
        </div>


    
    </div>


<br><br>
    </form>
    </div>

</body>

</html>
