<table class="table">
  <thead>
    <tr>
      <th scope="col">Num</th>  
      <th scope="col">Nombre</th>
      <th scope="col">Autor</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>
@foreach ($Books as $Book)
    <tr>
      <th scope="row">{{$Book->id}}</th>
      <td>{{$Book->name_book}}</td>
      <td>{{$Book->name_author}}</td>
      <td>{{$Book->gender}}</td>
    </tr>
@endforeach   
  </tbody>
</table>