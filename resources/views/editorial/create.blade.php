<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="container text-center">
        <div class="row">
          <div class="col text-start">

            <div class="card">
            <div class="card-header">
                <h3 class="display-4"> Crear Editorial </h3>
            </div> 
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
                 </ul>
                 </div>
                 @endif
             
                <form action=" {{ url('/editorials/') }}" method="post">
                 @csrf
                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial</label>
                        <input type="text" class="form-control" name="editorial" id="editorial" placeholder="Escriba el nombre de la editorial">
                    </div>   
                    <button type="submit" class="btn btn-primary">Agregar</button>

                </form>

            </div>    

            </div>


          </div>
          <div class="col">
            
          </div>
         
        </div>
      </div>


</body>
</html>
