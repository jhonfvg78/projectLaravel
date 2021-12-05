@extends('dashboard.master')
@section('content')
   <h6>Crear publicacion</h6>

   <form action="{{ route('post.store') }}" method="post">
    @include('dashboard.post._form')
    
</form>
@endsection