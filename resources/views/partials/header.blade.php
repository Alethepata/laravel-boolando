@php
    $menu= config('menu');
@endphp

<header>
    <div class="menu">
        <nav>
            <ul>
                @foreach ($menu as $item )
                  <li>
                    <a href="{{route($item['link'])}}">{{$item['title']}}</a>
                  </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
