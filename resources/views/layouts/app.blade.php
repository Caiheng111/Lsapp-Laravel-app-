<!DOCTYPE html>
<html lang="{{config('app.name','LSAPP')}}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{config('app.name','LSAPP')}}</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<body>

  @include('inc.navbar')

  <div class="container">
      @yield('content')
  </div>




</body>

</html>