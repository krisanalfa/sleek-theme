<nav class="nav-menu">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">
                <div class="pull-left">
                    <h1 class="brand">
                        <a href="{{ URL::site() }}">
                            <span class="logo">
                                <img src="{{ \URL::base('vendor/sleek-theme/img/xinix-logo.png') }}" alt="">
                            </span>
                            <span>Bono Sleek</span>
                        </a>
                    </h1>
                </div>
                <div class="pull-right">
                    <ul class="flat topbar">
                        <li class="notification">
                            <a href="#">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge">2</span>
                            </a>
                            <ul class="sub animated">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-comment-o"></i>
                                        New Comment
                                        <span class="sub-badge pull-right">+5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope-o"></i>
                                        New Message
                                        <span class="sub-badge pull-right">+2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="user">
                            <a href="#">
                                <div class="avatar" style="background: url('{{ \URL::base('vendor/sleek-theme/img/xinix-logo.png') }}') center no-repeat; background-size: cover;"></div>
                                <!-- <div class="avatar" style="background: url('{{ \URL::base('vendor/sleek-theme/img/a.jpg') }}') center no-repeat; background-size: cover;"></div> -->
                                <span>
                                    <small>Welcome, </small>
                                    Muhammad Ali Alaydrus
                                </span>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="sub animated">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
