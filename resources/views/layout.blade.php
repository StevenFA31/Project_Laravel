

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
    
    <title>Document</title>
</head>
<body>
  <section>
    <h1>@yield('title')</h1>

    <div class="divCat">
        @yield('content')
    </div>

<div id="buttons">
  <a href="/" class="btn blue">Home</a>
  <a href="/artiste" class="btn green">Artiste</a>
  <a href="/genre" class="btn red">Genre</a>
  <a href="/disque" class="btn orange">Disque</a>
  <a href="/liste" class="btn purple">Liste</a>
  <a href="/chat" class="btn yellow">Chat</a>
</div>

<p>Copyright&copy 2022 <a href="https://github.com/StevenFA31" target="_blank" class="link">Steven</a></p>

</section>
</body>
</html>