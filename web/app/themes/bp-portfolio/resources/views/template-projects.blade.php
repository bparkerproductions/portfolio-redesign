{{--
  Template Name: All Projects
--}}

@extends('layouts.app')

@section('content')
  @component('components.header')
    <p>{{$hero_description}}</p>
  @endcomponent

  @include('partials.projects.projects-loop')
@endsection
