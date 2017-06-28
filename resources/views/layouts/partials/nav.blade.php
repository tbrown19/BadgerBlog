        <!-- Start Top Bar -->
        <div class="top-bar">

            <div class="top-bar-left">
                <ul class="menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">Newest</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="menu">
                    @if (Auth::check())
                        <li><a href="{{ url('/Account') }}">Account</a></li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- End Top Bar -->