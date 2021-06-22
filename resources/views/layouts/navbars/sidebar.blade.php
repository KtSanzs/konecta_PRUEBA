<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->

  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Prueba Konecta') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
    @if(Auth::check())
    @foreach(\App\Models\User::$menu[Auth::user()->rol] as $value)
    @if (isset($value["hijos"]))
    <p>no hay</p>
    @else
    <li class="nav-item{{ ' active' }}">
        <a class="nav-link" href="{{ $value['url'] }}">
          <i class="{{$value['icono']}}"></i>
            <p>{{$value['nombre']}}</p>
        </a>
      </li>

     
      @endif
    @endforeach
    @endif
 
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Permissions') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Roles') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
