{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
                    @role('admin')
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Role
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li class="sub-menu"><a href="{{route('user.index')}}"><i class="glyphicon glyphicon-home"></i>
                            Users</a></li>
                </ul>
                <!-- Sub menu -->
                <ul>
                    <li class="sub-menu"><a href="{{route('role.index')}}"><i class="glyphicon glyphicon-home"></i>
                            Roles</a></li>
                </ul>
            </li>
            @endrole
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Create
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li class="sub-menu"><a href="{{route('banglaword.create')}}"><i class="glyphicon glyphicon-home"></i>
                            Audio Create</a></li>
                </ul>
                <!-- Sub menu -->
                <ul>
                    <li class="sub-menu"><a href="{{route('videocontent.create')}}"><i class="glyphicon glyphicon-home"></i>
                            Video Create</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Edit Content
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li class="sub-menu"><a href="{{ url('/audioEdit') }}"><i class="glyphicon glyphicon-home"></i>
                            Audio Edit</a></li>
                </ul>
                <!-- Sub menu -->
                <ul>
                    <li class="sub-menu"><a href="{{ url('/videoEdit') }}"><i class="glyphicon glyphicon-home"></i>
                            Video Edit</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->