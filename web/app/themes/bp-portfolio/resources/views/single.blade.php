@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @component('components.header')
      @if(get_post_type() == "projects")
        <a href="{{$project_link}}">
          See {!!APP::title()!!} Live
        </a>
      @else
        {{$blog_description}}
      @endif

    @endcomponent
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
