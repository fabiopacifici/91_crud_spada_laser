<header class="bg-dark text-center py-4">
    @include('partials.logo')
    <nav class="nav justify-content-center mt-4">
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-danger text-white' : '' }}   " href="{{ route('home')}}" aria-current="page">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'lightsabers' ? 'bg-danger text-white' : '' }} " href="{{ route('lightsabers')}}">Spade</a>
        <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-danger text-white' : '' }} " href="{{ route('contacts')}}">Contacts</a>


        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="adminMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
            </button>
            <div class="dropdown-menu" aria-labelledby="adminMenu">
                <a class="dropdown-item" href="{{route('lightsabers.index')}}">Lightsabers</a>
                <a class="dropdown-item" href="{{route('posts.index')}}">Posts</a>
            </div>
        </div>
    </nav>
</header>
