{{--
  Template Name: Archive Template
--}}

@extends('layouts.app')

@section('content')
  {{-- Single Project Head --}}
  @component('components.header')
    <h3>{{$blog_description}}</h3>
  @endcomponent

  @if (!$post_query->have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="entry-content spacer">
    @while ($loop_object->have_posts())
      @php $loop_object->the_post() @endphp
      <div class="column-center">
        <div class="inner-container">
          @include('partials.content-'.get_post_type())
        </div>
      </div>
    @endwhile
  </div>
@endsection
