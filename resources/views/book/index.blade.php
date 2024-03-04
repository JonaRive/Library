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
  @extends('layouts.app')
  @section('content')

    <div class="container ">
        <div class="row">

          
          <div >

            <div class="card">
              <div class="card-header text-center">
                <h3 class="display-3 "> Biblioteca </h3> 
              </div>

              

              <div class="container">

              
                <div  class="d-grid gap-2 d-md-flex justify-content-md-start mt-2">
                  <a href=" {{ url ('/authors') }}" class=" btn btn-secondary mt-1"> Autores </a>
                  <a href=" {{ url ('/categories') }}" class=" btn btn-secondary mt-1"> Categorias </a>
                  <a href=" {{ url ('/editorials') }}" class=" btn btn-secondary mt-1"> Editoriales </a>
                </div>
                

                 <form  method="GET" class="d-md-flex justify-content-md-end">
                   <div class="btn-group">
                     <input type="text" name="busqueda" class="form-control">
                     <input type="submit" value="Enviar" class="btn btn-primary">

                   </div>
                 </form>
              </div>

              <div class="card-body ">

                <table class="table mt-1">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Titulo</th>
                      <th scope="col">Fecha de lanzamiento</th>
                      <th scope="col">Idioma</th>
                      <th scope="col">Paginas</th>
                      <th scope="col">Descripccion</th>
                      <th scope="col">Author</th>
                      <th scope="col">Categoria</th>
                      <th scope="col">Editorial</th>
                      <th scope="col"> Accione</th>
                    </tr>
                  </thead>
  
                  <tbody>    
                   @foreach ($book as $bok)     
                  
                    <tr>
                      <th> {{ $bok->id}}     </th>
                      <td> {{ $bok->title }} </td>
                      <td> {{ $bok->releaseDate }} </td>
                      <td> {{ $bok->language }} </td>
                      <td> {{ $bok->pages }} </td>
                      <td> {{ $bok->description }} </td>
                      <td> {{ $bok->author_id }} </td>
                      <td> {{ $bok->categorie_id }} </td>
                      <td> {{ $bok->editorial_id }} </td>
                      <td> 
  
                       <a href=" {{ url ('/books/'.$bok->id.'/edit') }}" class="btn btn-primary">Editar</a>
  
                       <form action=" {{ url('/books/'.$bok->id ) }}  " class="d-inline"  method="post">
                          @csrf 
                          {{ method_fieLd('DELETE') }}
                          <button type="submit" class=" btn btn-danger">Borrar </button>
                       </form>
  
                      </td>
                    </tr>
  
                    @endforeach
                  </tbody>
                </table>
                <div class="container d-grid gap-2 d-md-flex justify-content-md-center">
                     
                    {!! $book->links() !!}
                   
                </div>
                <div  class="d-grid gap-2 d-md-flex justify-content-md-end ">
                  <a href=" {{ url ('/books/create') }}" class=" btn btn-secondary mt-1"> Registrar</a>
                </div>
              </div>
            </div>
    
            

          
            
           
             
            </div>
         
        </div>
      </div>
      @endsection 
</body>
</html>
