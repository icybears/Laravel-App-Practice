@if(session('message'))
        @if(session('style'))
        <div class=' {{ "alert alert-" . session("style") }}' role="alert">
                {{ session('message') }}
        </div>
        @else
        <div class='alert alert-info' role="alert">
                        {{ session('message') }}
        </div>
        @endif
@endif