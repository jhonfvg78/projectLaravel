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
        <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $post->id }}" class="btn btn-outline-danger">Eliminar</button>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>
{{ $posts ->links()}}

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal " aria-label="Close"></button>
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿esta seguro de borrar la publicacion seleccionada?</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form id="formDelete" method="POST" action="{{ route('post.destroy', 0) }}" data-action="{{ route('post.destroy', 0) }}">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>

      </div>

    </div>

  </div>



</div>
<script>
  window.onload = function() {
    $('#deleteModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget)
      var id = button.data('id')
      action = $('#formDelete').attr('data-action').slice(0, -1)
      action += id
      $('#formDelete').attr('action', action)
      var modal = $(this)
      modal.find('.modal-title').text('vas a borrar la publicacion:' + id)
    });
  };
</script>

@endsection