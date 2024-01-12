<header>

    <div class="top-header py-1">
        <div class="text-container d-flex">
            <span>
                DC POWER VISA <i class="fa-regular fa-registered"></i>
            </span>
            <span class="ms-5">
                ADDITIONAL DC SITES  <i class="fa-solid fa-caret-down"></i>
            </span>

        </div>
    </div>

    <div class="container d-flex justify-content-between py-3">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>

        <div class="header-left d-flex">

            <nav class="nav-bar d-flex">
                <ul class="list-items d-flex gap-3">
                    @foreach ($navItems as $navItem)
                        <li class="list-unstyled d-flex flex-center">
                            <a href="{{ route($navItem['path']) }}" class="text-decoration-none flex-center"> {{ $navItem['name'] }}</a>
                            @if ($loop->last)
                            <div class="arrow-down ms-2">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            @endif

                        </li>
                    @endforeach
                </ul>
            </nav>
            
            <div class="search-bar input-group ms-4 d-flex align-self-center">
                <input type="text" name="" id="" class=" text-end" placeholder="Search">
                <button type="submit" class="btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </div>

</header>