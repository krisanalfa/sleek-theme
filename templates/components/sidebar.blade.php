<div class="span-2 sidebar">
    <ul class="nav">
        @foreach(App::getInstance()->config('navbar.menus') ?: array() as $uri)
            @if(! isset($uri['children'])) <!-- NO CHILD -->
                <li>
                    <a href="{{ URL::site($uri['uri']) }}">{{ @$uri['icon'] }} &nbsp;&nbsp;{{ @$uri['title'] }}</a>
                </li>
            @else <!-- HAS CHILD -->
                <li class="collapsible">
                    <a href="#"><span class="pull-left">{{ @$uri['icon'] }}</span> &nbsp;&nbsp;{{ @$uri['title'] }} <i class="icon">+</i></a>
                    <ul class="hide animated fadeOutUp">
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
