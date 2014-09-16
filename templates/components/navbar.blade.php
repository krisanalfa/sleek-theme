<nav class="nav-menu">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row">
                <div class="span-12">
                    <div class="pull-left">
                        <h1 class="brand">
                            <a href="{{ URL::site() }}">
                                <span class="brand-logo">
                                    Bono PHP Framework<br />
                                    Your Great Application
                                </span>
                            </a>
                        </h1>
                    </div>
                    <div class="pull-right">
                        <div class="nav">
                            <ul class="menu">
                                @foreach(App::getInstance()->config('navbar.menus') as $uri)
                                    @if(! isset($uri['children']))
                                        <li>
                                            <a href="{{ URL::site($uri['uri']) }}">{{ @$uri['icon'] }}</i>&nbsp;&nbsp;{{ @$uri['title'] }}</a>
                                        </li>
                                    @else
                                        <li class="collapsible login">
                                            <a href="#">{{ @$uri['icon'] }}&nbsp;&nbsp; {{ @$uri['title'] }} </a>
                                            <ul>
                                                @foreach (@$uri['children'] as $uri)
                                                    <li>
                                                        <a href="{{ URL::site($uri['uri']) }}">
                                                            {{ @$uri['icon'] }}&nbsp;&nbsp;{{ @$uri['title'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
