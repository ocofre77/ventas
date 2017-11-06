<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
            @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get(Auth::user()->email) }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
            @endif

                    <!-- search form (Optional) -->
{{--
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
                  <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
            </form>
--}}
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
                <!-- Optionally, you can add icons to the links -->
{{--

                @if ( Auth::user()->hasRole('admin'))
                    <li class="{{ (((Request::is('Dashboard1') || Request::is('Dashboard2') || Request::is('Dashboard3'))) ? 'active treeview' : 'treeview')  }}" >
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {{ (Request::is('Dashboard1') ? 'class=active' : '') }}>
                                <a href="{{ url('Dashboard1') }}">
                                    <i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                            <li  {{ (Request::is('Dashboard2') ? 'class=active' : '') }} >
                                <a href="{{ url('Dashboard2') }}">
                                    <i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                            <li {{ (Request::is('Dashboard3') ? 'class=active' : '') }}>
                                <a href="{{ url('Dashboard3') }}">
                                    <i class="fa fa-circle-o"></i> Actividades</a></li>
                        </ul>
                    </li>
                @endif
--}}

                @if ( Auth::user()->hasRole('admin'))
                    <li class="{{ ((Request::is('Properties') || (Request::is('Projects'))) ? 'active treeview' : 'treeview')  }}">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                            <span>Inmuebles</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="{{ ((Request::is('Properties')) ? 'class=active' : '')}}">
                                <a href="{{url('Properties')}}">Mis Inmuebles</a></li>
                            <li class="{{ ((Request::is('Projects')) ? 'class=active' : '')}}">
                                <a href="{{url('Projects')}}">Proyectos</a></li>
                            <li class="{{ ((Request::is('Tags')) ? 'class=active' : '')}}">
                                <a href="{{url('Tags')}}">Caracteristicas</a></li>
                        </ul>
                    </li>
                @endif

                <li class="{{ ((Request::is('Customers') ) ? 'active treeview' : 'treeview')  }}">
                    <a href="#"><i class="fa fa-users" aria-hidden="true"></i>
                        <span>Contactos</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="{{ ((Request::is('Customers')) ? 'class=active' : '')}}">
                            <a href="{{url('Customers')}}">Mis Contactos</a></li>
                        {{--
                                            <li >
                                                <a href="{{ url('Marketing') }}">Ventas</a></li>
                                            <li><a href="#">Propietarios</a></li>
                        --}}
                    </ul>
                </li>

                @if ( Auth::user()->hasRole('admin'))
                    <li class="{{ (((Request::is('ReportsSales') || Request::is('ReportsTasks') )) ? 'active treeview' : 'treeview')  }}">
                        <a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                            <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li {{ (Request::is('ReportsSales') ? 'class=active' : '') }}>
                                <a href="{{url('ReportsSales')}}">Ventas</a></li>
                            <li class="{{ ((Request::is('ReportsTasks')) ? 'class=active' : '')}}">
                                <a href="{{ url('ReportsTasks') }}">Comericialización</a></li>
                        </ul>

                    </li>
                @endif

                @if ( Auth::user()->hasRole('admin'))
                    <li class="treeview">
                        <a href="#"><i class="fa fa-lock" aria-hidden="true"></i>
                            <span>Seguridad</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('entrust-gui::users.index') }}">Usuarios</a></li>
                            <li><a href="{{ route('entrust-gui::roles.index') }}">Roles</a></li>
                            {{--<li><a href="{{ route('entrust-gui::permissions.index') }}">Permisos</a></li>--}}
                        </ul>
                    </li>
                @endif

                @if ( Auth::user()->hasRole('admin'))
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Configuración</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{url('PropertyStates')}}">Estados de Propiedad</a>
                            </li>
                            <li><a href="{{url('PropertyTypes')}}">Tipos de Propiedad</a></li>
                        </ul>
                    </li>
                @endif


            </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
