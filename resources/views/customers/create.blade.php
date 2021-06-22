@extends('layouts.main', ['activePage' => 'customers', 'titlePage' => 'Nuevo Cliente'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('customers.store') }}" class="form-horizontal">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Cliente</h4>
              <p class="card-category">Ingrese datos del cliente</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre"
                    autocomplete="off" autofocus>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <label for="documento" class="col-sm-2 col-form-label">Numero de Documento</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="document_id" placeholder="Ingrese el numero del documento de identidad"
                    autocomplete="off" autofocus>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <label for="email" class="col-sm-2 col-form-label">Correo Electronico</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" name="email" placeholder="Ingrese el correo electronico"
                    autocomplete="off" autofocus>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <label for="address" class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="address" placeholder="Ingrese la direccion"
                    autocomplete="off" autofocus>
                </div>
              </div>
            </div>

            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
