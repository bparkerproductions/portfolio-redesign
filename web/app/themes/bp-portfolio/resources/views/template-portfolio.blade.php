{{--
  Template Name: Portfolio
--}}

@extends('layouts.app')

@section('content')

  {{-- Hero Section --}}
  @include('partials.portfolio.hero')

  {{-- About Section --}}
  @include('partials.portfolio.about')

  {{-- Blog Posts Section --}}
  <section class="blog-posts-container column-center">
    <div class="inner-container">
      @include('partials.global.related-posts', [
        'component_title' => 'See Blog Posts'
      ])
    </div>
  </section>

  @include('partials.portfolio.projects')
  @include('partials.portfolio.testimonials')
  @include('partials.global.cta')
@endsection