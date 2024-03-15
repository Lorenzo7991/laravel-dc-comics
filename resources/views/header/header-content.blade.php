<header class="bg-white">
    <nav class="container d-flex justify-content-between align-items-center py-2">
        <div id="header-logo" class="img-fluid">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="dc_logo">
        </div>
        <div id="header-nav">
            <ul class="list-unstyled d-flex gap-3 text-secondary">
                @if(isset($menuItems))
                    @foreach($menuItems as $menuItem)
                        <li><a href="#">{{ strtoupper($menuItem) }}</a></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </nav>
</header>
