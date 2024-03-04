
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
    <div class="container ">
        <div class="row">

          <div class="col-3"> 
            </div>
          <div class="col-6">

            <div class="card">
              <div class="card-header text-center">
                <h3 class="display-3 "> Editoriales </h3> 
              </div>
              <div  class=" container d-grid gap-2 d-md-flex justify-content-md-start mt-2">
                <a href=" {{ url ('/books') }}" class=" btn btn-secondary mt-1"> Libros </a>
                <a href=" {{ url ('/authors') }}" class=" btn btn-secondary mt-1"> Autores </a>
                <a href=" {{ url ('/categories') }}" class=" btn btn-secondary mt-1"> Categorias </a>
               
              </div>
              <div class="card-body">

                <table class="table mt-3">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Editorial </th>
                      <th scope="col"> Accione</th>
                    </tr>
                  </thead>
  
                  <tbody>    
                   @foreach ($editorial as $edito)     
                  
                    <tr>
                      <th> {{ $edito->id}}     </th>
                      <td> {{ $edito->editorial }} </td>
                      <td> 
  
                       <a href=" {{ url ('/editorials/'.$edito->id.'/edit') }}" class="btn btn-primary">Editar</a>
  
                       <form action=" {{ url('/editorials/'.$edito->id ) }}  " class="d-inline"  method="post">
                          @csrf 
                          {{ method_fieLd('DELETE') }}
                          <button type="submit" class=" btn btn-danger">Borrar </button>
                       </form>
  
                      </td>
                    </tr>
  
                    @endforeach
                  </tbody>
                </table>
                <div  class="d-grid gap-2 d-md-flex justify-content-md-end ">
                  <a href=" {{ url ('editorials/create') }}" class=" btn btn-success mt-1"> Registrar</a>
                </div>
              </div>
            </div>
           
             
            </div>
            <div class="col-3"> 
            </div>
        </div>
      </div>
</body>
</html>