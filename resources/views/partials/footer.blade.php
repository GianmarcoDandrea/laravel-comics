<footer>
    <div class="footer-top">
        <div class="container d-flex justify-content-between">
            <div class="left-section">
                <nav class="d-flex link-section">
                    @foreach ($footerNavItems as $footerNavItem)
                    <div class="link-card">
                        <h4 class="list-title">{{$footerNavItem['title']}}</h4>
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

            <div class="left-sct">
                <a href="" class="sign-up-btn">
                    SIGN UP NOW!
                </a>
            </div>

            <div class="right-sct">
                <h3 class="follow-title">
                    FOLLOW US
                </h3>

                <ul>
                    @foreach ($socialIcons as $socialIcon)
                    <li>
                        <a href="">
                            <img src="getImagePath(`${icon}`)" alt="">
                        </a>
                    </li>
                        
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</footer>