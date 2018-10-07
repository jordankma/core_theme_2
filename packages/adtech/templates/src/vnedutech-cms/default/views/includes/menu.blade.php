@if (isset($MENU_LEFT))
    <?php $stt = 0; $key = 0; ?>
    @foreach( $MENU_LEFT as $key => $menu )
        @if ($stt > 0 && $menu->parent == 0)
            @if (isset($MENU_LEFT[$key - 1]))
                @if ($MENU_LEFT[$key - 1]->parent > 0)
                </ul>
                @endif
            @endif
        </li>
        @endif

        @if ($menu->parent == 0)
            @if ($menu->route_name != '#')
                @if (!Illuminate\Support\Facades\Route::has($menu->route_name))
                    @continue
                @endif
                @if (!$USER_LOGGED->canAccess($menu->route_name))
                    @continue
                @endif
            @endif

            <li class="menu_more">
                <a href="{{ ($menu->route_name != '#') ? ($menu->route_params) ? route($menu->route_name, [$menu->route_params]) : route($menu->route_name) : '#' }}">
                    {{--<i class="livicon" data-name="{{ ($menu->icon != '') ? $menu->icon : 'question' }}" data-size="18" data-c="{{ $COLOR_LIST[rand(0, 5)] }}" data-hc="{{ $COLOR_LIST[rand(0, 5)] }}"--}}
                    <i class="livicon" data-name="question" data-size="18" data-c="{{ $COLOR_LIST[rand(0, 5)] }}" data-hc="{{ $COLOR_LIST[rand(0, 5)] }}"
                       data-loop="true"></i>
                    <span class="title">{{ $menu->name }}</span>
                    <span class="fa arrow"></span>
                </a>
            @if (isset($MENU_LEFT[$key + 1]))
                @if ($MENU_LEFT[$key + 1]->parent > 0)
                    <ul class="sub-menu">
                @endif
            @endif
        @endif

        @if ($menu->parent > 0)
            @if (Illuminate\Support\Facades\Route::has($menu->route_name))
                @if ($USER_LOGGED->canAccess($menu->route_name))
                    <li {!! (Request::is('admin/' . str_replace('.', '/', substr($menu->route_name, 0, strrpos($menu->route_name, '.'))) . '/*') ? 'class="active"' : '') !!}>
                        <a href="{{ ($menu->route_params) ? route($menu->route_name, [$menu->route_params]) : route($menu->route_name) }}">
{{--                            <i class="livicon" data-name="{{ ($menu->icon != '') ? $menu->icon : 'question' }}" data-size="18" data-c="{{ $COLOR_LIST[rand(0, 5)] }}" data-hc="{{ $COLOR_LIST[rand(0, 5)] }}"--}}
                            <i class="livicon" data-name="question" data-size="18" data-c="{{ $COLOR_LIST[rand(0, 5)] }}" data-hc="{{ $COLOR_LIST[rand(0, 5)] }}"
                               data-loop="true"></i>
                            <span class="title">{{ $menu->name }}</span>
                        </a>
                    </li>
                @endif
            @endif
        @endif

        <?php $stt++; ?>
    @endforeach

    @if (isset($MENU_LEFT[$key + 1]))
        @if ($MENU_LEFT[$key + 1]->parent > 0)
            </ul>
        @endif
    @endif
    </li>
@endif

@section('footer_scripts_more')
    <script>
        $(function () {
            $( "li.menu_more" ).each(function( i, element ) {

                var sub_menu = element.querySelector('ul.sub-menu');
                if (sub_menu) {
                    if (sub_menu.children.length > 0) {
                        var checkActive = sub_menu.querySelector('li.active');
                        if (checkActive != null) {
                            element.classList.add('active');
                        }
                    } else {
                        element.querySelector('ul.sub-menu').remove();
                        element.querySelector('a > span.fa').remove();
                        var link = element.querySelector('a');
                        if (link.getAttribute("href") === '#') {
                            element.remove();
                        }
                    }
                } else {
                    element.querySelector('a > span.fa').remove();
                    var link = element.querySelector('a');
                    if (link.getAttribute("href") === '#') {
                        element.remove();
                    }
                }

            });
        });
    </script>
@stop
