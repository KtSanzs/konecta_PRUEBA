@extends('layouts.main', ['activePage' => 'customers', 'titlePage' => 'Cliente'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Clientes</h4>
            <p class="card-category">Lista de clientes registrados en la base de datos</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
              
                <a href="{{ route('customers.create') }}" class="btn btn-sm btn-facebook">Añadir cliente</a>
              
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> Documento</th>
                  <th> Nombre </th>
                  <th> Correo </th>
                  <th> Direccion </th>
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($customer as $customer)
                  <tr>
                    <td>{{ $customer->document_id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->address }}</td>
                    <td class="text-primary">{{ $customer->created_at->toFormattedDateString() }}</td>
                    <td class="td-actions text-right">
                      <a href="{{ route('customers.show', $customer->document_id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                      <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                      <form action="{{ route('customers.destroy', $customer->id) }}" method="post"
                        onsubmit="return confirm('areYouSure')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
         
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
