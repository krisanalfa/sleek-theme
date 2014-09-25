<nav class="nav-menu">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">
                <div class="pull-left">

                    <!-- BRAND -->
                    @section('brand')
                    <h1 class="brand">
                        <a href="{{ URL::site() }}">
                            <span class="logo">
                                <img src="{{ \URL::base('vendor/sleek-theme/img/xinix-logo.png') }}" alt="">
                            </span>
                            <span>Bono Sleek</span>
                        </a>
                    </h1>
                    @show
                    <!-- END OF BRAND -->

                </div>
                <div class="pull-right">
                    <ul class="flat topbar">

                        <!-- NOTIFICATION -->
                        @section('notification')
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
                        @show
                        <!-- END OF NOTIFICATION -->

                        <!-- USER NAVIGATION -->
                        @section('user.navigation')
                        <li class="user">

                            <!-- USER NAVIGATION AVATAR / IMAGE -->
                            @section('user.navigation.avatar')
                            <a href="#">
                                <div class="avatar" style="background: url('{{ \URL::base('vendor/sleek-theme/img/xinix-logo.png') }}') center no-repeat; background-size: cover;"></div>
                                <span>
                                    <small>Welcome, </small>
                                    Admin
                                </span>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            @show
                            <!-- END OF USER NAVIGATION AVATAR / IMAGE -->

                            <!-- USER NAVIGATION MENU / DROPDOWN -->
                            @section('user.navigation.menu')
                            <ul class="sub animated">

                                <!-- USER NAVIGATION CHILD MENU -->
                                @section('user.navigation.menu.children')
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cogs"></i>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out"></i>
                                        Logout
                                    </a>
                                </li>
                                @show
                                <!-- END OF USER NAVIGATION CHILD MENU -->

                            </ul>
                            @show
                            <!-- END OF USER NAVIGATION MENU / DROPDOWN -->
                        </li>
                        @show
                        <!-- END OF USER NAVIGATION -->

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
