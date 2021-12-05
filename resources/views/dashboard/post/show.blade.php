@extends('dashboard.master')
@section('content')
<div class="form-group"> 
<input readonly class="form-control" type="text" name="publication" id="publication" placeholder="Publicacion" value="{{ $post -> publication }}">

</div>

<div>
    <textarea readonly class="form-control" name="publication_content" id="publication_content" cols="30" rows="10">"{{ $post -> publication_content }}"</textarea>
</div>

<div>
    <a href="" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
@endsection

