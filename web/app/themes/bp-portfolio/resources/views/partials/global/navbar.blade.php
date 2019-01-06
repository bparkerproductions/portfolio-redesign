<nav class="primary-navigation">

  <div class="content-container">
    <ul>
      @foreach($primary_nav_items as $item)
        <li class="{{App::IsActive($item->title)}}">
          <a href="{{$item->url}}">
            {{$item->title}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>

  <div class="toggle-container">
    <i class="fas fa-bars"></i>
  </div>
</nav>