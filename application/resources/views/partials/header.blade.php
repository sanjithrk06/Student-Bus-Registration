<div class="header">
    <div class="header-left active">
        <a href="{{ route('dashboard')}}" class="logo text-center w-100">
            <h3 class="text-center fw-bold "  style="color: darkblue; padding-top:5px;" >Bus Portal</h3>
        </a>
        <a href="{{ route('dashboard')}}" class="logo-small text-center m-auto">
            <h3 class="text-center"  style="color: darkblue;" >Bus Portal</h3>
        </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>   
        </span>
    </a>

    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img"><i data-feather="user"></i></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <a class="dropdown-item" href="#"> <i class="me-2" data-feather="user"></i> My Profile</a>
                    <hr class="m-0">
                    <a class="dropdown-item logout pb-0" href="#"><img src="{{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img">Logout</a>
                </div>
            </div>
        </li>
    </ul>

    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">Logout</a>
        </div>
    </div>
</div>