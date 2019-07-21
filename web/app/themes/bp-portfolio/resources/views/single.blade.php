@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @component('components.header', [
      'icon_class' => Single::getIconClass()
    ])
      @if(get_post_type() == 'projects')
        <a href="{{$project_link}}">
          See {!! $project_title !!} Live
        </a>
      @endif
      @if(get_post_type() == 'demos')
        <p>{{$demo_description}}</p>
      @endif
    @endcomponent
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
