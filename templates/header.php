<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>weshop | toko online menjual elektronik</title>

  <!-- LOAD CSS DISINI -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
  <link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>vendors/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>resources/css/style.css">
</head>

<body>
  <div class="container">
    <a class="logo" href="index.php">weshop</a>
    <div class="banner">
      <div class="hero-text-box">
        <h1>Belanja Elektronik Original Berkualitas</h1>
      </div>
    </div>

    <header>
      <nav class="menu">
        <ul class="menu-user">
          <li><a href="<?=BASE_URL.'index.php?page=login'?>">Login</a></li>
          <li><a href="<?=BASE_URL.'index.php?page=register'?>">Register</a></li>
        </ul>

        <a class="keranjang" href="<?=BASE_URL.'index.php?page=keranjang'?>"><i class="icon ion-md-cart"></i></a>
      </nav>
    </header>

  </div>