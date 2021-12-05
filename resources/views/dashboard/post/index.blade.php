@extends('dashboard.master')
@section('content')
    <h6>Listar publicaciones</h6>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Publicacion</th>
            <th scope="col">Contenido</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <th scope="row">{{ $post -> id }}</th>
                <td>{{ $post ->publication }}</td>
                <td>{{ $post ->publication_content}}</td>
              
           <td>
              <a href="{{route('post.show',$post -> id)}}" class="btn btn-info">Ver</a>
              <a href="{{route('post.edit',$post -> id)}}" class="btn btn-info">Editar</a>
              <a href="{{route('post.destroy',$post -> id)}}" class="btn btn-danger">Eliminar</a>
            </td>

        </tr>
            @endforeach
 
      </tbody>
    </table>
    {{ $posts ->links()}}
@endsection
