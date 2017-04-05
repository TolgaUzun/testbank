<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#693689" />
    <title>Test Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
</head>
<body>
<div class="container" id="page">
    <header class="row jumbotron" id="masthead">
        <h1 class="pull-left"><a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/win.png" alt="logo" /></a></h1>
        <div class="pull-left">
            <h1 style="font-size:2em;">Test Bank</h1>
            <p class="" style="font-size:1.2em;">Bilgini sına, genel kültürünü artır!</p>
        </div>
        <div id="user">
          <span>Menü </span> <i class="fa fa-bars fa-2x"></i>
        </div>
    </header>
    <nav id="toggle" class="row">
        <ul class="col-md-12">
            <li><a href="<?= base_url("anasayfa") ?>"><span class="glyphicon glyphicon-home"></span> Ana Sayfa</a></li>
            <li><a href="istatistik.php"><span class="glyphicon glyphicon-stats"></span> İstatistiklerim</a></li>
            <li><a href="profil.php"><span class="glyphicon glyphicon-user"></span> Profilim</a></li>
            <li><a href="soruKayit.php"><span class="glyphicon glyphicon-log-in"></span> Soru Gönder</a></li>
            <li><a href="iletisim.php"><span class="glyphicon glyphicon-envelope"></span> İletişim</a></li>
            <li><a href="<?= base_url("main/logout") ?>"><span class="glyphicon glyphicon-off"></span> Çıkış</a></li>
        </ul>
    </nav>
  <section class="content-box">
