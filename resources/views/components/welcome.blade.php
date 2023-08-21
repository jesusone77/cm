 
<html>
    <head>
        <title>@yield('title')</title>
        <h3>@yield('title')<h3>
    </head>
    <body>
        @section('sidebar')
            CRUD
        @show
 
        <div class="container">
            @yield('content') 
        </div>
    </body>
</html>