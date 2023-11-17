@php
    $menu= config('menues.menu_header');
@endphp

<header>
    <div class="top-bar">
        <div class="container d-flex justify-content-between">
            <nav class="menu">
                <ul class="d-flex">
                    @foreach ($menu as $item )
                      <li>
                        <a href="{{route($item['link'])}}">{{$item['title']}}</a>
                      </li>
                    @endforeach
                </ul>
            </nav>

            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="/img/boolean-logo.png" alt="">
                </a>
            </div>

            <nav class="flex">
                <a href="#"><i class="fa-regular fa-user"></i></a>
                <a href="#"><i class="fa-regular fa-heart"></i></a>
                <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
            </nav>

        </div>
    </div>
</header>
