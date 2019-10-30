<section class="archive-header column-center">
  <div class="inner-container">
    <h2 class="header">{!!APP::title()!!}</h2>
    <div class="subtitle-container">
      @if($icon_class)
        <div class="icon-container">
          <i class="{{$icon_class}}"></i>
        </div>
      @endif
      {!! $slot !!}
    </div>
  </div>
</section>