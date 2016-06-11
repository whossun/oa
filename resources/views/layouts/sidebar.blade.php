<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>

            <li class="nav-item start">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">我的桌面</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start">
                        <a href="{{ url('/') }}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">工作日记</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">工作计划</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">系统管理</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('user.index') }}" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title">成员管理</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('role.index') }}" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">角色管理</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('permission.index') }}" class="nav-link ">
                            <i class="icon-key"></i>
                            <span class="title">权限管理</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>