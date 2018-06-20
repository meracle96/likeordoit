<header id="header" class="header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div id="logo" class="logo float-left">
                    <a href="index.html" rel="home">
                        <img src="{{ asset('front/images/logo.png') }}" alt="imag">
                    </a>
                </div><!-- /.logo -->
                <div class="btn-menu">
                    <span></span>
                </div><!-- //mobile menu button -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="nav-wrap">
                    <nav id="mainnav" class="mainnav float-left">
                        <ul class="menu">
                            <li class="home">
                                <a href="/">Home</a>
                            </li>
                            <li>
                              <a href="/challenge">Challenge</a>
                            </li>
                            <li>
                              <a href="#">About</a>
                            </li>
                            <li>
                              <a href="#">Contact</a>
                            </li>
                            @guest
                            <li>
                              <a href="/login">Login</a>
                            </li>
                            <li>
                              <a href="/register">Sign Up</a>
                            </li>
                            @endguest
                        </ul><!-- /.menu -->
                    </nav><!-- /.mainnav -->

                    <div class="button-addlist float-right">
                        <button type="button" class="flat-button" onclick="location.href='{{ route('challenge.create') }}'">Add Challenge</button>
                     </div>
                </div><!-- /.nav-wrap -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div>
</header>
