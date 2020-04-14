@extends('layouts.main')

@section('content')

<div class="box box-primary">
  <div class="box-header ">
    <h2 class="box-title col-md-5">Listado de Carreras</h2>
    <br><br>
    <input type ='button' class="btn btn-success"  value = 'Agregar' onclick="location.href = '{{route('carreras.create')}}'"/> 
  </div>

<div class="box-body">              
  @if($carreras->isNotEmpty())
 <table id="tabla table-striped" class="display table table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th style="width:10px">#</th>
            <th>Nombre</th>
            <th>Duracion</th>
            <th>Plan</th> 
            <th>Departamento</th>
            <th>Estado</th> 
            <th>Imagen</th> 
            <th></th>
        </tr>
    </thead>
<tbody>
   @foreach($carreras as $carrera) 

          @if ($carrera->estado!='inactivo')
            <tr role="row" class="odd">
          @else
            <tr role="row" class="odd" style="background-color: rgb(255,96,96);">
          @endif
            <td>{{$carrera->id}}</td>
            <td>{{$carrera->nombre_carrera}}</td>
             <td>{{$carrera->duracion}}</td>
            <td>{{$carrera->anio_plan}}</td>
            <td>{{$carrera->departamento->nombre_dpto}}</td>
            <td>{{$carrera->estado}}</td>
            <td> 
            @if($carrera->imagen!=null)
                   
             <div>
                  
                  <a data-toggle="modal">
                   <img src="{{ asset('images/carrera/'.$carrera->imagen)  }}" width="40" height="40"> 
                   </a>
                  
              </div>
                   
            @endif
            </td>
            <td></td>
                      
        </tr>  </tr>
  @endforeach
   </tbody>
 </table>

 <div class="text-center">

  {!!$carreras->appends(request()->input())->links()!!}

</div>
@else
<div class="alert alert-dismissable alert-warning">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <p>No se encontró ninguna carrera.</p>
</div>

@endif

  </div>
</div>
@endsection