{{-- @Nombre del programa: --}}
{{-- @Funcion:  --}}
{{-- @Autor:  --}}
{{-- @Fecha Creacion:  --}}
{{-- @Requerimiento: --}}
{{-- @Fecha Modificacion:  --}}
{{-- @Modificado por:    --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> {{  Auth::user()->name }}</div>



    {{ Form::open(['route' => ['UsersUpdatePassword', $user->id], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id'=>'form-change-password']) }}

        <div class="box box-danger">
            <div class="box-body">
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3">
                  @include('layouts.include.messages')
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3">
                  <span id="helpBlock" class="help-block"> Fields marked with an asterisk (*) are required.</span>
                </div>
              </div>
              <div class="form-group">
                  {{ Form::label('password', 'Password(*)', ['class' => 'col-lg-3 control-label']) }}

                  <div class="col-lg-6">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}
                  </div>
              </div>

              <div class="form-group">
                  {{ Form::label('password_confirmation', 'Password Confirmation(*)', ['class' => 'col-lg-3 control-label']) }}

                  <div class="col-lg-6">
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation']) }}
                  </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <div class="text-center">
                    {{ Form::submit('Update', ['class' => 'btn btn-success btn-sm','title'=>'Actualizar']) }}
                    {{ link_to_route('UserProfile', 'Cancel', [$user->id], ['class' => 'btn btn-danger btn-sm','title'=>'Cancelar']) }}
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
            </div>
        </div>
   {{ Form::close() }}

      

            </div>
        </div>
    </div>
</div>
@stop
@section('after-scripts-end')
@stop
