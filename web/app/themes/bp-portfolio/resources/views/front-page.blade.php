{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')

  {{-- Hero Section --}}
  @include('partials.home.hero')

  {{-- About Section --}}
  @include('partials.home.about')

  {{-- Projects Section --}}
  @include('partials.home.projects')
@endsection