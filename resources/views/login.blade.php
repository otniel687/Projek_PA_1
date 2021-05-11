<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Login Admin</title>
    <style>
      span{
        color: green;
      }
    </style>
  </head>
  <body style='background-image: url("{{asset('img/logg.jpg')}}");'>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="img/logo2.png" width="80px" alt="Logo">&nbsp;&nbsp;<b>Beranda</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <br><br><br><br>
    <div class="container card" style="width: 30rem;">
    <center>
        <h2><i class="fas fa-user"></i>&nbsp;&nbsp;<b class="title" style="color: navy;">Login Admin</b></h2>
        <hr>
        </center><br>
    <form class="form container" method="post" action="{{route('login')}}">
    @csrf
        <div class="loginbody">
        <label for="username">Username</label>
        <input id="username" class="form-control border-top-0" type="email" name="email"><br>
        <label class="show-icon" for="show-password"> </label>
          <input style="display: none;" type="checkbox" id="show-password">
        <label for="password">Password</label>
        <input id="password" class="form-control" type="password" name="password"><br><br>
        <center><button class="btn btn">Login</button></center>
  
        @if (session('message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
    </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
  <script type="" src="{{ asset('js/script.js') }}"></script>
</html>