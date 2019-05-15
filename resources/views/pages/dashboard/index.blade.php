@extends('layouts.dashboard')

@section('content')
    @include('sections.dashboard.nav')
    <div id="wrapper">
        @include('sections.dashboard.sidebar')
        <div id="content-wrapper">
            <div class="container-fluid">
                @yield('main')
            </div>
            @include('sections.dashboard.sticky_footer')
        </div>
    </div>
@endsection