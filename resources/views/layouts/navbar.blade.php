<nav class="navbar">
    <a class="navbar-brand" href="/">ElevDB</a>

    <div class="ml-auto">
        <form action="{{ route('logout') }}" class="form-inline" method="post">
            @csrf
            <button class="btn btn-danger">Log ud</button>
        </form>
    </div>
</nav>
