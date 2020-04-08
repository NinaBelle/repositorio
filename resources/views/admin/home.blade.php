@extends('layouts.main')
 
 
@section('content')
  <div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <!-- Default box -->
        <div class="box box-info text-center">
          
          <h1> <b>Bienvenido al panel de administración</b></h1>
        
        <div class="row text-center">
          <div class="col-md-7 text-center">
            <a href="{{route('departamentos.index')}}" id="DepartamentoIndex"><button>Lista de Departamentos</button></a>
          </div>
          <div class="col-md-1 text-center">
            <a href="{{route('departamentos.create')}}" id="sales"><button>Nuevo Departamento</button></a>
          </div>
        </div>
                
        <br>
      </div>
           
        <!-- /.box -->

      </div>
    </div>
  </div>
@endsection