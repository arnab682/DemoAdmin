<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            
            
          @if(Auth::user()->superadmin == true)
            <li class="nav-title">Super Admin</li>

            <li class="nav-item nav-dropdown">
                <a href="{{route('superadminDashboard')}}" class="nav-link {{Route::currentRouteName() == 'superadminDashboard' ? 'active' : ''}}">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>

            </li>

            <li class="nav-item nav-dropdown">
                <a href="{{route('userListSuperadmin')}}" class="nav-link {{Route::currentRouteName() == 'userListSuperadmin' ? 'active' : ''}}">
                    <i class="icon icon-basket-loaded"></i> User List
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a href="" class="nav-link {{Route::currentRouteName() == 'superadminNew Request' ? 'active' : ''}}">
                    <i class="icon icon-book-open"></i> New User
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="" class="nav-link {{Route::currentRouteName() == 'superadminBlockList' ? 'active' : ''}}">
                    <i class="icon icon-user"></i> Users Block List
                </a>
            </li>

          @endif
          @if(Auth::user()->admin == true)
            <li class="nav-title">Admin</li>

            <li class="nav-item nav-dropdown">
                <a href="{{route('adminDashboard')}}" class="nav-link {{Route::currentRouteName() == 'adminDashboard' ? 'active' : ''}}">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            

            
          @endif

          @if(Auth::user()->superadmin == false && Auth::user()->admin == false)
            <li class="nav-title">User</li>

            <li class="nav-item">
                <a href="{{route('userDashboard')}}" class="nav-link {{Route::currentRouteName() == 'userDashboard' ? 'active' : ''}}">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>


         @endif

        </ul>
    </nav>
</div>
