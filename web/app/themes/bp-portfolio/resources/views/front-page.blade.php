{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')

@include('partials.home.hero')

@include('partials.home.about')
@include('partials.home.categories')
@endsection