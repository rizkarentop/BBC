@extends('layouts.app')

@section('title', __('home.page_title'))
@section('description', __('home.page_description'))

@section('content')

@include('sections.hero')

@include('sections.statistics')

@include('sections.company-overview')

@include('sections.core-business')

@include('sections.certifications')

@include('sections.current-project')

@include('sections.why-choose-us')

@include('sections.featured-projects')

@include('sections.cta')

@endsection
