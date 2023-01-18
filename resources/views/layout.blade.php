

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
    <script src="https://kit.fontawesome.com/2f46264504.js" crossorigin="anonymous"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">     --}}
    <title>CDThéque</title>
</head>
<body>
  <section>
    <div class="min-box">
      <h1>@yield('title')</h1>
     </div>
    <div class="box-title">
      <div class="divCat">
        @yield('content')
      </div>
    </div>
<div class="box-buttons">
<div id="buttons">
  <a href="/" class="btn blue">Home</a>
  <a href="/artiste" class="btn green">Artiste</a>
  <a href="/genre" class="btn red">Genre</a>
  <a href="/disque" class="btn orange">Disque</a>
  <a href="https://http.cat/" class="btn yellow">Chat</a>
</div>
</div>
<footer>
  <p>Copyright&copy 2022 <a href="https://github.com/StevenFA31" target="_blank" class="link">Steven</a></p>
  {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> --}}
  </footer>
</div>

</section>
</body>
</html>