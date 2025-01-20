<nav>
    <ul>
        @auth
            @if (auth()->user()->role === 'admin')
                <li><a href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
            @elseif (auth()->user()->role === 'masyarakat')
                <li><a href="{{ route('masyarakat.dashboard') }}">Dashboard contoh Masyarakat</a></li>
            @endif
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
        @endauth
    </ul>
</nav>
