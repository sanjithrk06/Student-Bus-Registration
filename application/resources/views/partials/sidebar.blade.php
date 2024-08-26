<div class="sidebar" id="sidebar">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 670px;" >
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="">
                        <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/img/icons/dashboard.svg') }}" alt="img"><span> Dashboard</span> </a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/bus.png') }}" alt="img"><span> Buses</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('buses') }}">Bus Details</a></li>
                            <li><a href="{{ route('combineBus') }}">Combine Bus</a></li>
                            <li><a href="{{ route('drivers') }}">Driver Details</a></li>
                            <li><a href="{{ route('busRegistration') }}">Bus Registration</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/student.png') }}" alt="img"><span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('students') }}">Students Details</a></li>
                            <li><a href="{{ route('studentsAttendance') }}">Attendance</a></li>
                        </ul>
                    </li>
                    {{-- <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/staff.png') }}" alt="img"><span> Faculty</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('faculties') }}">Faculty Details</a></li>
                        </ul>
                    </li> --}}
                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{ asset('assets/img/icons/mail.png') }}" alt="img"><span> Mails</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('mail') }}">Send Mail</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 670px;"></div>
        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
    </div>
</div>