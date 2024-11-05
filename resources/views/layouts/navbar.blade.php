<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom">
        <!-- Left-side Navigation Links -->
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link @yield('home-active')">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link @yield('tasks-active')">Tasks</a></li>
            <li class="nav-item"><a href="#" class="nav-link @yield('createTask-active')">Create Task</a></li>
        </ul>

        <!-- Right-side Login/Sign-up Links -->
        <div class="text-end">
            <ul class="nav nav-pills">
                @if(!Auth::check())
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link @yield('login-active')">Login</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link @yield('signup-active')">Sign-up</a>
                </li>
                @endif
                @if (Auth::check())
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </header>
</div>
