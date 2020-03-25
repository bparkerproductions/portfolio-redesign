{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')

@include('partials.home.hero')

@include('partials.home.about')
@include('partials.home.categories')
@include('partials.components.blog-grid', [
  'header' => 'More Blog Posts',
  'blog_list' => APP::RandomPostIds(9)
])
@endsection