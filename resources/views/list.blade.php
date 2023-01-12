<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- le temps de faire fonctionner les echanges de DATA sur le tableaux --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Liste</title>
</head>
<body>

  <nav>
    <a href="/" id="aId">Home</a>
    <a href="/salon" id="aId">Salon</a>
    <a href="/pmu" id="aId">PMU</a>
    <a href="/list" id="aId">Liste</a>
    <div class="animation start-home" id=""></div>
  </nav>

    <table class="table table-dark" style="margin-top: 50px">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ARTISTE</th>
            <th scope="col">GENRE</th>
            <th scope="col">ANNÉE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>POP</td>
            <td>2001</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>ROCK</td>
            <td>2020</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>LOFI</td>
            <td>1967</td>
          </tr>
        </tbody>
      </table>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>