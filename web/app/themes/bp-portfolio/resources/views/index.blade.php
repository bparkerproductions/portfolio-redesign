@extends('layouts.app')

@section('content')
  {{-- Single Project Head --}}
  @component('components.header')
    <p>{{$blog_description}}</p>
  @endcomponent

  @include('partials.category-list')

  <div class="entry-content spacer-small">
    <div class="column-center">
      <div class="inner-container">
        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-'.get_post_type())
        @endwhile
      </div>
    </div>
  </div>
@endsection