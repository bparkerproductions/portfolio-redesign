<nav class="primary-navigation column-center">
  <section class="primary-content inner-container">

    <div class="content-container">
      <ul>
        <li class="home-item {{APP::isActive('home page')}}">
          <a href="{{$home_item['url']}}">
            {{$home_item['title']}}
          </a>
        </li>

        {{-- Rest of the items that aren't home --}}
        @foreach($primary_nav_items as $item)
          <li class="{{App::IsActive($item['link']['title'])}}">
            <a href="{{$item['link']['url']}}">
              {{$item['link']['title']}}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </section>

  <div class="toggle-container">
    <i class="fas fa-bars"></i>
  </div>
</nav>