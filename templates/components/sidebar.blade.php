<div class="span-2 sidebar">
    <ul class="nav">
        @foreach(App::getInstance()->config('navbar.menus') as $uri)
            @if(! isset($uri['children']))
                <li>
                    <a href="{{ URL::site($uri['uri']) }}">{{ @$uri['title'] }}</a>
                </li>
            @else
                <li class="collapsible">
                    <a href="#">{{ @$uri['title'] }} <i class="icon">+</i></a>
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
