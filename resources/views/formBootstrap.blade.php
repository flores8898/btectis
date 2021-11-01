<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laravel 8- Form Validation</title>
  </head>
  <body>

    <div class="container mt-5">
      <div class="row">
        <h1 class="text-center text-white mt-4">Laravel 8 - Validacion de formu</h1>
        <div class= "col-lg-6 col-12 mx-auto">
            <!-- mensaje de que los campos han sido validados-->
        @if(Session::has('success'))
        <div class="alert alert-success text-center">
            {{Session::get('success')}}

        </div>
        @endif

        </div>

        <div class="p-5 bg-white rounded shadow-log">
            <form method="post" action="guardar" novalidate>
                @csrf
                <div class="form-group mb-2">
                    <label>Titulo</label>
                    <input type="text" class ="form-control"  @error ('titulo') is-invalid @enderror" name = "titulo" value="{{old('titulo')}}">
                    @error('nombre')
                    <span class="invalid-feedback">
                        <strong>{{message}}</strong>
                    </span>
                    @enderror 
                </div>
                <div class="d-grid mt-3">
                    <input type="submit" value= "Enviar" class="btn btn-primary">

                </div>
            </form>
        </div>


      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>
/*<form method="post" action="guardar" novalidate>
    @csrf
    <div >
      <label >Titulo</label>
      <input type="text" class="form-control  @error ('titulo') is-invalid @enderror" name = "titulo" value="{{old('titulo')}}">
    @error('nombre')
    <span class="invalid-feedback">
        <strong>{{message}}</strong>
    </span>
    @enderror
    
    
        <button type="submit" evalue="Enviar" class="btn btn-primary">Submit</button>

  </form>*/