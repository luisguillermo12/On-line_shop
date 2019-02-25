@extends('layouts.app')

@section('content')
<div class="box-tools pull-right">
<a title="Crear publicacion" class="btn btn-sm btn-success" href="{{route('ToPost.create')}}"><i class="fa fa-plus"></i> Crear publicacion</a>
</div>
<section class="portfolio">
    <div class="container">


      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center">
          <div class="heading">
          <h3>   Your publications</h3>
          </div>
        </div>
      </div>



      <div class="row">
  @if($publications->count()>0)
     @foreach($publications as $publication)
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset($publication->images->first()->route) }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>
          </div>
          <span><center><h3>{{ $publication->name }}</h3></center></span>
          <span><center> <h4>{{ number_format($publication->price, 2, ',', '.') }} $  <h4>  
                         </center></span>
        </div>
      @endforeach
  @else
        <span> Currently does not have active publications</span>

  @endif


              
@endsection
@section('after-scripts-end')
@include('layouts.script.scriptregister')   
@stop