@extends('layouts.main', ['activePage' => 'customers', 'titlePage' => 'Editar Cliente'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('customers.update', $customer->id) }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar cliente</h4>
              <p class="card-category">Editar datos del cliente</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="name" placeholder="Ingrese el Nombre"
                    value="{{ old('name', $customer->name) }}" autocomplete="off" autofocus>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <label for="document_id" class="col-sm-2 col-form-label">Numero de documento</label>
                <div class="col-sm-7">
                  <input type="number" class="form-control" name="document_id" placeholder="Ingrese el documento"
                    value="{{ old('document_id', $customer->document_id) }}" autocomplete="off" autofocus>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <label for="email" class="col-sm-2 col-form-label">Correo electronico</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" name="email" placeholder="Ingrese el correo electronico"
                    value="{{ old('email', $customer->email) }}" autocomplete="off" autofocus>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <label for="address" class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="address" placeholder="Ingrese la direccion"
                    value="{{ old('address', $customer->address) }}" autocomplete="off" autofocus>
                </div>
              </div>
            </div>
            <!--End body-->
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </div>
          <!--End footer-->
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
