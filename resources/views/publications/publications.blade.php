@extends('layouts.app')

@section('content')
<span>aqui iran las publicaciones de los usuarios </span>
<a title="Crear publicacion" class="btn btn-sm btn-success" href="{{route('ToPost.create')}}"><i class="fa fa-plus"></i> Crear publicacion</a>
              
@endsection
@section('after-scripts-end')
@include('layouts.script.scriptregister')   
@stop