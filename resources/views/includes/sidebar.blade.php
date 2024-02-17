<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('main')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Puente</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
{{--        <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--            <div class="image">--}}
{{--                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
{{--            </div>--}}
{{--            <div class="info">--}}
{{--                <a href="#" class="d-block">Admin</a>--}}
{{--            </div>--}}
{{--        </div>--}}


        <!-- ФОРМА ДЛЯ ПОИСКА -->
{{--        <div class="form-inline">--}}
{{--            <div class="input-group" data-widget="sidebar-search">--}}
{{--                <input class="form-control form-control-sidebar" type="search" placeholder="Search"--}}
{{--                       aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="fas fa-search fa-fw"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route ('main')}}" class="nav-link">
                        <i class="nav-icon far fas fa-home"></i>
                        <p>
                            Главная
                            {{--                            <span class="badge badge-info right">2</span>--}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route ('projects.index')}}" class="nav-link">
                        <i class="nav-icon far fas fa-table"></i>
                        <p>
                            Проекты
                            {{--                            <span class="badge badge-info right">2</span>--}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route ('users.index')}}" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Сотрудники
{{--                                                        <span class="badge badge-info right">2</span>--}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route ('tasks.index')}}" class="nav-link">
                        <i class="nav-icon far fas fa-pen"></i>
                        <p>
                            Задачи
                            {{--                            <span class="badge badge-info right">2</span>--}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route ('machines.index')}}" class="nav-link">
                        <i class="nav-icon far fas fa-car"></i>
                        <p>
                            Техника
{{--                                                        <span class="badge badge-info right">2</span>--}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route ('marketings.index')}}" class="nav-link">
                        <i class="nav-icon far ion-stats-bars"></i>
                        <p>
                            Маркетинг
                            {{--                            <span class="badge badge-info right">2</span>--}}
                        </p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route ('departments.index')}}" class="nav-link">--}}
{{--                        <i class="nav-icon far fas fa-users"></i>--}}
{{--                        <p>--}}
{{--                            Отделы--}}
{{--                                                        <span class="badge badge-info right">2</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route ('companies.index')}}" class="nav-link">--}}
{{--                        <i class="nav-icon far fas fa-building"></i>--}}
{{--                        <p>--}}
{{--                            Контрагенты--}}
{{--                            <span class="badge badge-info right">2</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route ('companies.index')}}" class="nav-link">--}}
{{--                        <i class="nav-icon far fas fa-building"></i>--}}
{{--                        <p>--}}
{{--                            Договоры--}}
{{--                            <span class="badge badge-info right">2</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route ('companies.index')}}" class="nav-link">--}}
{{--                        <i class="nav-icon far fas fa-building"></i>--}}
{{--                        <p>--}}
{{--                            Бухгалтерия--}}
{{--                            <span class="badge badge-info right">2</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
