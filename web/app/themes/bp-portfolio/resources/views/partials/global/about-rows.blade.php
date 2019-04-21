<section class="about-rows">
  @foreach($about_rows as $row)
    <div class="about-row column-center">
      <div class="inner-container">
        <div class="header-container">
          <h2 class="row-title">{{$row['title']}}</h2>
        </div>
        <div class="row-content-container">
          {!! $row['blurb'] !!}

          @if($row['button'])
            <div class="button-container">
              <a href="{{$row['button']['url']}}"
                target="{{$row['button']['target']}}">
                <button class="button border white">
                  {{$row['button']['title']}}
                </button>
              </a>
            </div>
          @endif
        </div>
      </div>
    </div>
  @endforeach
</section>