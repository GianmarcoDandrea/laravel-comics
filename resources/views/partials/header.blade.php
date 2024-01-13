<header>

    <div class="top-header py-1">
        <div class="text-container d-flex">
            <span>
                DC POWER VISA <i class="fa-regular fa-registered"></i>
            </span>
            <span class="ms-5">
                ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i>
            </span>

        </div>
    </div>

    <div class="container d-flex justify-content-between">
        <div class="logo">
            <a href="/">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </a>
        </div>

        <div class="header-left d-flex">

            <nav class="nav-bar d-flex">
                <ul class="list-items d-flex gap-4">
                    @foreach ($navItems as $navItem)
                        <li class="list-unstyled d-flex flex-center gap-1">

                            <a href="{{ route($navItem['path']) }}" class="text-decoration-none">
                                {{ $navItem['name'] }}
                            </a>

                            @if ($loop->last)
                                <div class="arrow-down">
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                            @endif

                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="container-search-bar input-group">
                <div class="search-bar d-flex">
                    <input type="text" name="" id="" class=" text-end" placeholder="Search">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                </div>
            </div>
        </div>
    </div>

</header>
