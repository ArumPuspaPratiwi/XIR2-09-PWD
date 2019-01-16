<html>
  <head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
  </head>
  <body class="ik" style="background: linear-gradient(135deg, #325adf 0#, #e750f 100#); background-color: white;">
    <header class="ob">
      <div class="atas">
        <div id="logo">
          <img style="width: 127px;margin-left: 40px;float: left;" src="<?=base_url()?>asset/motor.jpg" alt="">
        </div>
        <nav>
          <ul>
            <li> <a href="<?=base_url()?>index.php/welcome/utama"> Home </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/event"> Event </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/gallery"> Gallery </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/contact"> Contact </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/profil"> MyProfil </a></li>
          </ul>
        </nav>
      </div>
    </header>
    <h1 align="center" style="color:skyblue;text-align: left; font-size: 10.3mm; margin-top:97px; margin-left: 12px; font-family: sans-serif;">Selamat Datang <?= $nama_lengkap?> <br> Berperilakulah seperti <?= $jenis_kelamin?></h1>
    <p style="font-size: 16px; margin-left: 56px; margin-top: 39px;">Disini Tempatnya melihat motor-motor keren!</p>
    <img style="width: 700px; margin-left: 645px; margin-top: -300px;" src="<?=base_url()?>asset/back.jpg" alt="">
  </body>
</html>
