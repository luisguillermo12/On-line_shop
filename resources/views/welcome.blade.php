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
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/2.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/3.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/4.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/5.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>



    </div>
  </section>
  <!-- End Girls -->

  <!-- Start Girls -->
  <section class="portfolio">
    <div class="container">


      <div class="row">
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/2.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/3.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/4.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/5.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>



    </div>
  </section>
  <!-- End Girls -->

  <!-- Start Girls -->
  <section class="portfolio">
    <div class="container">


      <div class="row">
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/2.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/3.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/4.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/5.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>



    </div>
  </section>
  <!-- End Girls -->

  <!-- Start Girls -->
  <section class="portfolio">
    <div class="container">


      <div class="row">
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/2.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/3.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/4.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="portfolio-box">
            <div class="portfolio-img">
              <img src="{{ asset("image/publications/5.jpg") }}" alt="#">
              <div class="overlay">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>



    </div>
  </section>
  <!-- End Girls -->

  @endsection