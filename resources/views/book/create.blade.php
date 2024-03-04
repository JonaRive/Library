
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="container text-center">
        <div class="row">
          <div class="col text-start">

            <div class="card">
            <div class="card-header">
                <h3 class="display-4"> Crear Libros </h3>
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
             
                <form action=" {{ url('/books/') }}"  method="post">
                 @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Libro</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Escriba el nombre del libro">
                    </div> 
                    
                    <div class="mb-3">
                        <label for="releaseDate" class="form-label">Fecha de lanzamiento </label>
                        <input type="date" class="form-control" name="releaseDate" id="releaseDate" placeholder="Agrega la fecha del libro">
                    </div> 

                    <div class="mb-3">
                        <label for="language" class="form-label">Idioma</label>
                        <input type="text" class="form-control" name="language" id="language" placeholder="Escriba el lenguaje del libro">
                    </div> 

                    <div class="mb-3">
                        <label for="pages" class="form-label"> Paginas   </label>
                        <input type="number" class="form-control" name="pages" id="pages" placeholder="Escriba la cantidad de pagina del libro">
                    </div> 

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripccion</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Escriba las descripccion del libro">
                    </div> 

                    <div class="mb-3">
                        <label for="author_id" class="form-label">Autor</label>
                        <select class="form-select" name="author_id" id="author_id" >
                        <option selected>Selecciona</option>
                        @foreach( $author as $auth )
                        <option value=" {{ $auth->id }}"> {{ $auth->author }}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="categorie_id" class="form-label">Categoria</label>
                        <select class="form-select" name="categorie_id" id="categorie_id" >
                        <option selected>Selecciona</option>
                        @foreach( $categorie as $catego )
                        <option value=" {{ $catego->id }}"> {{ $catego->categorie }}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="editorial_id" class="form-label">Editorial</label>
                        <select class="form-select" name="editorial_id" id="editorial_id" >
                        <option selected>Selecciona</option>
                        @foreach( $editorial as $edit )
                        <option value=" {{ $edit->id }}"> {{ $edit->editorial }}</option>
                        @endforeach
                        </select>
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