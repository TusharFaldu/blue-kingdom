@extends('layouts.app')

@section('content')
  @include('components/home.hero')
  @include('components/home.reviews')
  @include('components/home.excursions')
  @include('components/home.boats')
  @include('components/home.customer-reviews')
  @include('components/home.map')
  @include('components/home.instagram')
  @include('components/home.cta')
@endsection
