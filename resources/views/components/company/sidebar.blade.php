<div class="left main-sidebar">
    <div class="sidebar-inner leftscroll">
        <div id="sidebar-menu">
            <ul>
                <li class="submenu">
                    <a class="active" href="{{url('/home')}}"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                </li>
                <li class="submenu">

                    <a class="#" href="{{url('/home/company-profile')}}"><i class="fa fa-th" aria-hidden="true"></i><span> Company Profile </span> </a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i><span> Projects </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('/home/company/create-project')}}" id="createProject">Create</a></li>
                        {{--  <li><button class="btn btn-outline-info" id="createProject">Create</button></li>  --}}
                        <li><a href="{{url('/home/company/projects-all')}}">All</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-list" aria-hidden="true"></i><span> Tasks </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="tables-basic.html">Create</a></li>
                        <li><a href="{{url('/home/company/projects-all')}}">All</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a class="#" href="index.html"><i class="fa fa-users" aria-hidden="true"></i> <span> Employees</span></a>
                </li>
                <li class="submenu">
                    <a class="#" href="index.html"><i class="fa fa-plug" aria-hidden="true"></i><span> Services </span> </a>
                </li>
                

                <li class="submenu">
                    <a href="charts.html"><i class="fa fa-fw fa-area-chart"></i><span> Charts </span> </a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>