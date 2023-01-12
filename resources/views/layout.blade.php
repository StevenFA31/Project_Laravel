

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

    <nav>
        <a href="/" id="aId">Home</a>
        <a href="/salon" id="aId">Salon</a>
        <a href="/pmu" id="aId">PMU</a>
        <a href="/list" id="aId">Liste</a>
        <div class="animation start-home" id=""></div>
      </nav>
  
    <h1>@yield('title')</h1>

    <div class="divCat">
        @yield('content')
    </div>
    
    <h1>Flat UI Buttons 2</h1>
<h1>Made by: <a href="https://github.com/StevenFA31" target="_blank" class="link">Steven</a></h1>

<div id="buttons">
  <a href="#" class="btn blue">Blue Button</a>
  <a href="#" class="btn green">Green Button</a>
  <a href="#" class="btn red">Red Button</a>
  <a href="#" class="btn purple">Purple Button</a>
  <a href="#" class="btn orange">Orange Button</a>
  <a href="#" class="btn yellow">Yellow Button</a>
</div>

<p>Copyright&copy 2022 <a href="https://github.com/StevenFA31" target="_blank" class="link">Steven</a></p>
</body>
</html>