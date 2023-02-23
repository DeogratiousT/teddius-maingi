@extends('layouts.app')

@section('content')
   <!-- ======= About Section ======= -->
    @include('pages.about')
  <!-- End About Section -->

  <!-- ======= Resume Section ======= -->
    @include('pages.resume')
  <!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
    @include('pages.services')
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
    @include('pages.portfolio')
  <!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
    @include('pages.contact')
  <!-- End Contact Section -->
@endsection