<footer>
    <div class="footer-top">
        <div class="container d-flex justify-content-between p-0">
            <div class="left-section">
                <nav class="d-flex link-section gap-2">
                    @foreach ($footerNavItems as $footerNavItem)
                        <div class="link-card">
                            <h4 class="list-title fw-bold">{{ $footerNavItem['title'] }}</h4>
                            <ul>
                                @foreach ($footerNavItem['subItems'] as $subItem)
                                    <li>
                                        <a href="#">{{ $subItem }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </nav>
            </div>
            <div class="rigth-section">

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">

            <div class="left-section">
                <a href="" class="sign-up-btn">
                    SIGN-UP NOW!
                </a>
            </div>

            <div class="right-sct">
                <h4 class="follow-title fw-bold">
                    FOLLOW US
                </h4>

                <ul>
                    @foreach ($socialIcons as $socialIcon)
                        <li>
                            <a href="">
                                <img src="{{ Vite::asset("resources/img/$socialIcon") }}" alt="">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</footer>
