@extends('layouts.app')

@section('content')
   @if (Auth::guest()) 
    @else   
      @if (Auth::user()->confirmed == 0 )
        <span>  Debe confirmar su correo electronico </span> 
      @endif
   @endif
  <!-- Start Girls -->
  <section class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center">
          <div class="heading">
            <h2> LV-SHOP
              <span class="veintucuatro">24</span>
            </h2>

          </div>
        </div>
      </div>
      <div class="row">
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
          <span><center><h4> {{ number_format($publication->price, 2, ',', '.') }} $
           @if (!Auth::guest())
              @if($publication->user_id != Auth::user()->id )  
                @foreach($in_the_cart as $public_in_cart )
                  @if( !$publications->contains($public_in_cart) )
                  <a data-toggle="tooltip" data-placement="top" title="add shopin car" class="btn btn-xs btn-primary"  href="{{route('ShoppingCartAdd',$publication->id)}}"><i class="fa fa-cart-plus"></i></a> 
                  @endif 
                  <a data-toggle="tooltip" data-placement="top" title="to post in the car" class="btn btn-xs btn-success"  href="{{route('ShoppingCartrepeat',$publication->id)}}"><i class="fa  fa-tag"></i></a> 
                @endforeach
              @endif
           @endif
        <h4> </center></span>
        </div>

   @endforeach





    </div>
  </section>
  <!-- End Girls -->

  <!-- Start Girls -->
 
  @endsection