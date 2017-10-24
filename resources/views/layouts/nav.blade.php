<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="{{ url('/') }}">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>

            {{--@if(Auth::check())--}}
            {{--<a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>--}}
            {{--@endif--}}
            @guest
            <a class="nav-link ml-auto" href="{{ route('login') }}">Login</a>
            <a class="nav-link " href="{{ route('register') }}">Register</a>
            @else

                    <a class="nav-link ml-auto" href="#" >
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                <a class="nav-link " href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

                @endguest
        </nav>
    </div>
</div>