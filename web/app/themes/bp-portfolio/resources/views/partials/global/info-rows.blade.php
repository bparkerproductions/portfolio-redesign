<section class="about-rows">
  @foreach($about_rows as $row)
    <div class="about-row">
      <div class="header-container">
        <h1 class="row-title">{{$row['title']}}</h1>
      </div>
      <div class="content-container">
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
  @endforeach
</section>