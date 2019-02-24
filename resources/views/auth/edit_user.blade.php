{{-- @Nombre del programa:  --}}
{{-- @Funcion:  --}}
{{-- @Autor:  --}}
{{-- @Fecha Creacion:  --}}
{{-- @Requerimiento: --}}
{{-- @Fecha Modificacion: --}}
{{-- @Modificado por:    --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> {{  Auth::user()->name }}</div>

     {{ Form::open(['route' =>  ['UserUpdate', $user->id], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post','id'=>'form-edit']) }}

        <div class="box box-danger">
            <div class="box-header with-border">
              <input type="hidden" name="codigo_gui" value="MOD-SEGU-1.2.2" id="codigo_gui">
                <h3 class="box-title">Editar </h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapsee">
                    
                  </button>
                </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3">
                  @include('admin.includes.messages')
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3">
                  <span id="helpBlock" class="help-block">Los campos marcados con un asterisco (*) son obligatorios.</span>
                </div>
              </div>

              <div class="form-group">
                  {{ Form::label('name', 'Nombre(*)', ['class' => 'col-lg-3 control-label']) }}

                  <div class="col-lg-6">
                      {{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                  </div>
              </div>
              <div class="form-group">
                  {{ Form::label('email', 'Email(*)', ['class' => 'col-lg-3 control-label']) }}

                  <div class="col-lg-6">
                      {{ Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Usuario']) }}
                  </div>
              </div>
                   <div class="form-group">
                  {{ Form::label('cellphone', 'cellphone(*)', ['class' => 'col-lg-3 control-label']) }}

                  <div class="col-lg-6">
                      {{ Form::text('cellphone', $user->cellphone, ['class' => 'form-control', 'placeholder' => 'cellphone']) }}
                  </div>
              </div>


              <div class="form-group">
                <div class="col-sm-12">
                  <div class="text-center">
                    {{ Form::submit('Guardar', ['class' => 'btn btn-success btn-sm','title'=>'Guardar']) }}
                    {{ link_to_route('UserProfile', 'Cancelar', [ $user->id ], ['class' => 'btn btn-danger btn-sm','title'=>'Cancelar']) }}
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

