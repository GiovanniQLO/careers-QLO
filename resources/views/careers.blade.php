@extends('layouts.app')

@section('title', 'Careers')

@section('content')
<div class="container-fluid">
    @include('sections.hero')
    @include('sections.why-us')
    @include('sections.testimonials')
    @include('sections.culture')
    @include('sections.cta')
</div>
@endsection