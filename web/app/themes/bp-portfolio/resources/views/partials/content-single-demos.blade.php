<div class="column-center spacer">
  <div class="inner-container entry-content">
    <div class="entry-meta">
      @foreach($technologies_list as $tech)
        <i class="{{$tech['icon']}}"></i>
      @endforeach
    </div>
    @php the_content(); @endphp
  </div>
</div>