<section class="column-center spacer about-section">
  <div class="inner-container">
    <div class="content-container">
      <h1 class="blue">
        {{$about_title}}
      </h1>
      <p class="para">
        {!!$about_desc!!}
      </p>

      <div class="button-container">
        <a href="{{$about_btn_link}}">
          <button class="button black">
            {{$about_btn_text}}
            <i class="fas fa-caret-right"></i>
          </button>
        </a>
      </div>
    </div>

    <div class="technologies-container">
      <h2 class="blue">
        {{$tech_header}}
      </h2>
      <div class="technologies">
        @foreach($technologies as $tech)
          <i class="{{$tech['icon']}}"></i>
        @endforeach
      </div>      
    </div>
  </div>
</section>