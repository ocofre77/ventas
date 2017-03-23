<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ url('Dashboard1') }}">
                        <i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li class="active">
                        <a href="{{ url('Dashboard2') }}">
                            <i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                    <li >
                        <a href="{{ url('Dashboard3') }}">
                            <i class="fa fa-circle-o"></i> Dashboard v3</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                    <span>Inmuebles</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Mis Inmuebles</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i>
                    <span>Contactos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Mis Contactos</a></li>
                    <li><a href="#">Propietarios</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-lock" aria-hidden="true"></i>
                    <span>Seguridad</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('entrust-gui::users.index') }}">Usuarios</a></li>
                    <li><a href="{{ route('entrust-gui::roles.index') }}">Roles</a></li>
                    <li><a href="{{ route('entrust-gui::permissions.index') }}">Permisos</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Configuración</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{url('PropertyStates')}}">Estados de Propiedad</a>
                    </li>
                    <li><a href="{{url('PropertyTypes')}}">Tipos de Propiedad</a></li>
                </ul>
            </li>



        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
