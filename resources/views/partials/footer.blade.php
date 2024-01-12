<footer>
    <div class="top-footer">
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

    <div class="bottom-footer">
        
    </div>
</footer>