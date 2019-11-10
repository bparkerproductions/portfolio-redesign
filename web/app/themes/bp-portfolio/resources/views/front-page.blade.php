{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')

  {{-- Hero Section --}}
  @include('partials.home.hero')

  {{-- About Section --}}
  @include('partials.home.about')

  {{-- Blog Posts Section --}}
  <section class="blog-posts-container column-center">
    <div class="inner-container">
      @include('partials.global.related-posts', [
        'component_title' => 'See Blog Posts'
      ])
    </div>
  </section>

  {{-- Projects Section --}}
  @include('partials.home.projects')

  {{-- Testimonials Section --}}
  @include('partials.home.testimonials')

  {{-- CTA Section --}}
  @include('partials.global.cta')
@endsection