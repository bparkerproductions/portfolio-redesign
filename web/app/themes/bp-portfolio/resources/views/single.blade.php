@extends('layouts.app')
@php
  $iconClass = get_post_type() == 'projects' ? 'fas fa-external-link-square-alt' : false;
@endphp
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @component('components.header', [
      'icon_class' => $iconClass
    ])
      @if(get_post_type() == 'projects')
        <a href="{{$project_link}}">
          See {!! $project_title !!} Live
        </a>
      @endif
    @endcomponent
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
