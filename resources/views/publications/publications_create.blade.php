@extends('layouts.app')

@section('content')

    {{ Form::open(['route' => 'ToPost.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post','id'=>'form-create','files'=>true]) }}

        
            <div class="box-header with-border">
              <input type="hidden" name="codigo_gui" value="MOD-SEGU-1.2.2" id="codigo_gui">
                <h3 class="box-title">Crear Publicacion</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    
                  </button>
                </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3">
                  @include('layouts.include.messages')
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3">
                  <span id="helpBlock" class="help-block">Los campos marcados con un asterisco (*) son obligatorios.</span>
                </div>
              </div>

              <div class="form-group">
                  {{ Form::label('name', 'Nombre del producto(*)', ['class' => 'col-lg-3 control-label']) }}

                  <div class="col-lg-6">
                      {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                  </div>
              </div>


             <div class="form-group">
                      <div class="col-sm-6 ">
                        {!!Form::label(' Descripción.', 'Descripción.', array('class' => 'col-lg-3 control-label'))!!}
                        <div class="col-sm-6">
                          {{ Form::textarea('description', null, ['class' => 'form-control', 'maxlength' => '199', 'rows' => "4"]) }}
                        </div>
                      </div>
            </div>

           <div class="form-group">
                {!! Form::label('Precio (*)', 'Precio(*)', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-6">
                  {!!Form::text('price',null,['id'=>'price','class'=>'form-control mayusculas','placeholder'=>'price','maxlength'=>16])!!}
                </div>
           </div>


                <div class="form-group">
                  {{ Form::label('image', 'Imagen(*)', ['class' => 'col-lg-3 control-label']) }}

                  <div class="col-lg-6">
                    {{ Form::file('images[]', ['id'=>'image','class' => 'form-control', 'multiple'=>true]) }}
                  </div>
              </div>

            <div class="form-group">
                <div class="col-sm-12">
                  <div class="text-center">
                    {{ Form::submit('Guardar', ['class' => 'btn btn-success btn-sm','title'=>'Guardar']) }}
                    {{ link_to_route('ToPost.index', 'Cancelar', [], ['class' => 'btn btn-danger btn-sm','title'=>'Cancelar']) }}
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>


@endsection
@section('after-scripts-end')
@include('layouts.script.scriptregister')   
@stop