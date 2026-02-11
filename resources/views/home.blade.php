@extends('partials.layouts')

@section('title', 'SHCHS | Shaping Minds, Changing Lives')
<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" ?v=5>
    <!-- Begin page content -->
  <div class="container-fluid img-fluid fixed w-100 h-100 pt-2">
    @include('welcome')
</div>
<section id="academic-section">
@include('academic.academic')
</section>
@include('partials.about-us')
@include('contact')
@include('partials.gallery')
