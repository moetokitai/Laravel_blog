<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
    <div id="app">
      @include('inc.nabvar')

        <div class="container py-4">
            @if(Auth::check())
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                           <a href="{{route('post.index')}}">Posts</a>
                        </li>
                        <li class="list-group-item">
                                <a href="{{route('post.create')}}">New Post</a>
                             </li>
                             <li class="list-group-item">
                                    <a href="{{route('post.trashed')}}">Trashed Post</a>
                                 </li>
                                 <li class="list-group-item">
                                        <a href="{{route('category.index')}}">Categories</a>
                                     </li>
                                     <li class="list-group-item">
                                            <a href="{{route('category.create')}}">New Category</a>
                                         </li>
                                         <li class="list-group-item">
                                            <a href="{{route('tag.index')}}">Tags</a>
                                         </li>
                                         <li class="list-group-item">
                                                <a href="{{route('tag.create')}}">New Tag</a>
                                             </li>
                    </ul>
                </div>
                @endif
            <div class="col-md-8">
            @yield('content')
            </div>
    </div>
</div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success') }}")
    @endif
</script>

</body>
</html>
