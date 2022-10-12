<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="http://localhost/agencia/asset/css/style_landing.css">  
  <title>Agencia de viajes</title>
</head>
<body>
<div class="container">

<header>
  <h2><a href="#"><i class="ion-plane"></i> Manuelito´s Travels</a></h2>
  <nav>
    <ul>
      <li>
        <a href="#" title="Hotels">Hoteles</a>
      </li>
      <li>
        <a href="#" title="Tours">Tours</a>
      </li>
      <li>
        <a class="btn" href="<?= base_url()?>Landing/login" title="">Registrate/Loging</a>
      </li>
    </ul>
  </nav>
</header>

<div class="cover">
  <h1>Donde te gustaria viajar.</h1>
  <form  class="flex-form">
    <label for="from">
      <i class="ion-location"></i>
    </label>
    <input type="search" placeholder="Que municipio te gustaria conocer?">
    <input type="submit" value="Buscar">
  </form>
  <div id="madeby">
    <span>
      Photo by <a href="https://unsplash.com/@benblenner" target="_blank">Manuelito´s Travels</a>
    </span>
  </div>
</div>

</div>
</body>
</html>