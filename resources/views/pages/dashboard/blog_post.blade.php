@extends('pages.dashboard.index')

@section('main')
    @include('sections.dashboard.breadcrumb')
    @include('sections.dashboard.blog_posts_table')
@endsection