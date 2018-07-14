@extends('layouts.main')


@section('content')
<h2>Activity Feed</h2>
<div class="container px-5 mt-4">
        
        <nav class="nav nav-pills nav-fill">
                <a class="nav-item nav-link  {{ stristr(Route::current()->uri,'activity/posts/recent') ? 'active' : '' }}" href='{{ url("activity/posts/recent") }}'>Recent Posts</a>
                <a class="nav-item nav-link {{ stristr(Route::current()->uri,'activity/posts/top') ? 'active' : '' }}" href='{{ url("activity/posts/top") }}'>Most Active Posts </a>
                <a class="nav-item nav-link {{ stristr(Route::current()->uri,'activity/comments/recent') ? 'active' : '' }}" href='{{ url("activity/comments/recent") }}'>Recent Comments</a>
        </nav>
        <div>
            @yield('current')
        </div>
</div>
@endsection
