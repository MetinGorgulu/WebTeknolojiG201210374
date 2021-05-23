<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<title>Web Teknoloji Proje Ödevi</title>
<style>
    body{
      min-width: 700px;
        }
</style>
</head>
<body>
    <aside>
        <div class="aside-cubuk fixed-top ">
            <div>
                <a href="https://www.instagram.com/mtngrgl/"><img class="sosyal" src="images/instagram.png" alt=""></a>
                <a href="https://twitter.com/metgor"><img class="sosyal" src="images/twitter.png" alt=""></a>
                <a href="https://www.instagram.com/mtngrgl/"><img class="sosyal" src="images/facebook.png" alt=""></a>
            </div>
        </div>
    </aside>
    <header class="p-3 bg-dark text-white fixed-top">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <h2 class="header-head">Metin Görgülü</h2>
                <div class="text-end">
                    <a class="navbar-brand" href="login.php"><button type="button" class="btn btn-warning">Login</button></a>
                </div>
            </div>
        </div>
    </header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top nav-fix"aria-label="Eighth navbar example">
        <div class="container">
          <a class="navbar-brand" href="index.html">Hakkında</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
           aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample07">
            <a class="navbar-brand" href="ozgecmis.html">Özgeçmiş</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
           aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="ilgialanlarim.html">İlgi Alanlarım</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
           aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="iletisim.html">İletişim</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
           aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="true"
                 style="font-size: larger;">Şehrim</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown07">
                    <li><a class="dropdown-item" href="kayseri-ili.html">Kayseri</a></li>
                    <li><a class="dropdown-item" href="Miras.html">mirasımız</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <main class="login-form">
        <div>
            <div>
                <div class="login-yer" >
                    <div class="card">
                        <div class="card-header login-baslik">GİRİŞ YAP</div>
                            <div class="card-body">
                                <form action="login-goster.php" method="post">
                                    <div class="row">
                                        <label for="email_address" class="col-md-4">E-Mail Addresi:</label>
                                        <div class="col-md-6">
                                            <input type="email" id="email_address" class="form-control" name="username" required autofocus>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <label for="password" class="col-md-4">Parola:</label>
                                        <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                        </div>
                                    </div><br>

                                    <div class="giris-yer">
                                        <button type="submit" class="btn btn-primary btn-warning" value="Gönder">GİRİŞ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

  <footer class="page-footer font-small blue fixed-bottom footer-style">
  <div class="footer-text text-center py-3">Metin Görgülü Web Teknoloji Performans Ödevi
  </div>
</footer>
</body>
</html>