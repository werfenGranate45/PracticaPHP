@extends('index')
@section('Nav-Bar')
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Nombre">
  <label for="floatingInput">Nombre del libro</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Autor">
  <label for="floatingPassword">Autor</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Precio">
  <label for="floatingPassword">Precio</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Genero">
  <label for="floatingPassword">Genero</label>
</div>
<div class="mb-3">
  <a href="/store">Picale aqui para guardar</a>    
</div>

@endsection('Nav-Bar')