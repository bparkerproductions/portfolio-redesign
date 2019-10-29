<nav class="primary-navigation column-center nav-alt">
  <section class="primary-content inner-container">

    <div class="content-container">
      <ul>
        <div class="home-item-container">
          <i class="{{$home_item_icon}}"></i>
          <li class="home-item {{APP::isActive('home page')}}">
            <a href="{{$home_item['url']}}">
              {{$home_item['title']}}
            </a>
          </li>
        </div>

        {{-- Rest of the items that aren't home --}}
        @foreach($primary_nav_items as $item)
          @php
            $is_active = App::IsActive($item['link']['title']);
            $has_dropdown = $item['has_dropdown'] ? 'has-dropdown' : false;
          @endphp

          <li class="{{$is_active}} {{$has_dropdown}}">
            <a href="{{$item['link']['url']}}">
              {{$item['link']['title']}}
            </a>

            {{-- Load submenu --}}
            @include('partials.global.navbar-submenu')
          </li>
        @endforeach
      </ul>
    </div>
  </section>

  <div class="toggle-container">
    <i class="fas fa-bars"></i>
  </div>
</nav>