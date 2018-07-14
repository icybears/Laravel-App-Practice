@extends('layouts.main')


@section('content')

<div class="container px-5 mt-4">
        <nav class="nav nav-pills nav-fill">
                <a class="nav-item nav-link active" href="#">Recent Posts</a>
                <a class="nav-item nav-link" href="#">Most Active Posts </a>
                <a class="nav-item nav-link" href="#">Recent Comments</a>
        </nav>
        <div>
            @yield('current')
        </div>
</div>
@endsection
