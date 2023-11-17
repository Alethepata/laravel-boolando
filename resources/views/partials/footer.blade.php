@php
    $menu= config('menues.menu_footer');
@endphp

<footer>
    <div class="container">
      <div class="second-text float">
        <h4>Boolando s.r.l</h4>
        <nav>
          <ul class="d-flex">
            @foreach ($menu as $item )
                <li>
                    <a href="{{$item['link']}}">{{$item['title']}}</a>
                </li>
            @endforeach
          </ul>
        </nav>
      </div>
      <div class="social">
        <h4>Trovaci anche su</h4>
        <nav>
          <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-square-pinterest"></i></a>
          <a href="#"><i class="fa-brands fa-square-youtube"></i></a>
        </nav>
      </div>
    </div>
 </footer>
