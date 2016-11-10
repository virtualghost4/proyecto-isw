<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">

    <title>@yield('title','Default')|users  </title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>

@include('admin.template.partes.menu')
    <section>
       <div class="container"> @yield('content')</div>
        </section>

<script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>