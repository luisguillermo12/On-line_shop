{{-- @Nombre del programa:  --}}
{{-- @Funcion: --}}
{{-- @Autor:  --}}
{{-- @Fecha Creacion:  --}}
{{-- @Requerimiento: --}}
{{-- @Fecha Modificacion: --}}
{{-- @Modificado por:  --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

    <div class="box box-danger">
      <div class="box-header with-border">
        <div class="box-tools pull-right">
        </div>
      </div>
      <div class="box-body">
        <div role="tabpanel">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="profile">
              <table class="table table-bordered dashboard-table">
                <tr>
                  <th>Nombre</th>
                  <td>{{ $user->name }}</td>
                </tr>
                <tr>
                  <th>Usuario</th>
                  <td>{{ $user->email }}</td>
                </tr>
                <tr>
                   <th>Logo del usuario</th>
                
                  <td>
                    <img src="{{ asset("image\profiles\user.png") }}" class="user-profile-image" style="max-height: 150px; width: auto;"/>
                  </td>
                </tr>
                <tr>
                  <th>cell phone </th>
                  <td>{{ $user->cellphone }}</td>
                </tr>
                   <tr>
                  <th>Fecha de creación</th>
                  <td>{{ $user->created_at->format('d-m-Y h:i:s') }}</td>
                </tr>
                <tr>
                  <th>Última actualización</th>
                  <td>{{ $user->updated_at->format('d-m-Y h:i:s') }}</td>
                </tr>
                <tr>
                  <th>Acciones</th>
                  <td>
                @if (Auth::user()->confirmed == 1 )
                     <a data-toggle="tooltip" data-placement="top" title="Cambiar contraseña" class="btn btn-xs btn-info" href="{{route('UserProfileChangePasword',$user->id)}}"><i class="fa fa-key"></i></a>
                     <a data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-xs btn-primary" href="{{route('UserEdit',$user->id)}}"><i class="fa fa-pencil"></i></a>
                     @if (Auth::user()->status == 1 )
                      <a data-toggle="tooltip" data-placement="top" title="Desactivar usuario" class="btn btn-xs btn-warning" href="{{route('UserDesactivate',$user->id)}}" ><i class="fa fa-pause"></i></a>
                     @else
                      <a data-toggle="tooltip" data-placement="top" title="Activar usuario" class="btn btn-xs btn-success" href="{{route('UserActivate',$user->id)}}"><i class="fa fa-play"></i></a>
                     @endif
                @else
                <a data-toggle="tooltip" data-placement="top" title="Renviar codigo " class="btn btn-xs btn-warning" href="{{route('ReCodeVeryUser',$user->id)}}" ><i class="fa fa-pause"></i></a>
                @endif
                  </td>
                </tr>
              </table>
            </div><!--tab panel profile-->
          </div><!--tab content-->
        </div><!--tab panel-->
      </div>
    </div>
         


            </div>
        </div>
    </div>
</div>
@endsection
@section('after-scripts-end')
<script>
/* swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
})*/
</script>
@endsection