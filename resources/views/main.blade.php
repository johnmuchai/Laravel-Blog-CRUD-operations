<!DOCTYPE html>
<html lang="en">
@include('partials._head')
@include('partials._stylesheets')


<body>
<!-- Default Bootstrap Navbar -->
@include('partials._navbar')
<div class="container" style="background-color:white; border-radius:10px;">

@include('partials._messages')

@yield('content')


    
</div><!-- end of .container -->
<div class="container-fluid">
@include('partials._footer')
@include('partials._javascript')
</div>

  </body>

</html>
