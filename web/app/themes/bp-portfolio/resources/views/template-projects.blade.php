{{--
  Template Name: All Projects
--}}

@extends('layouts.app')

@section('content')
  @component('components.header', [
    'icon_class' => 'fas fa-file-code'
  ])
    <p>{{$hero_description}}</p>
  @endcomponent

  @include('partials.projects.projects-loop')
@endsection
