<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Golyamuhely">
    <meta name="keywords" content="festmeny,restauralas,butor,grafika">
    <meta name="author" content="Nagy Zoltán">
    <title>Golyamuhely</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="./pics/ico/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/app.css" />
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <div class="bg-dark">
            <marquee behavior="scroll" direction="right">
                <script src="js/nevnapok.js "></script>
            </marquee>
        </div>
    </header>

    <nav class="navbar navbar-expand-md  navbar-dark bg-info">
        <div class="container">
            <button class=" navbar-toggler navbar-toggler-right " type="button " data-toggle="collapse " data-target="#hamburgermenü " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
                <span class="navbar-toggler-icon "></span></button>
            <a class="navbar-brand " href="index.html ">
                <h1>Gólyaműhely</h1><img src="./pics/ico/ahtale2.png " class="rounded-circle " alt="golyalogo " title="Gólyaműhely " role="img " id="golyalogo "></a>




            <div class="collapse navbar-collapse flex-lg-column " id="hamburgermenü ">

                <ul class="navbar-nav ">

                    <li class="nav-item active ">
                        <a class="nav-link " href="index.html ">Főoldal<span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="bemutatkozas.html ">Bemutatkozás</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown " aria-haspopup="true " aria-expanded="false ">Referenciák
                            
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="festmeny-restauralas.html">Restaurálás</a>
                            <a class="dropdown-item" href="grafika.html">Grafika</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="olajfestmenyek.html ">Olajfestmény</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="mozaik.html ">Mozaik</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="butor.html ">Bútor</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="mese.html ">Mese</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="ajandektargyak.html ">Ajándéktárgyak</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="kedvencek.html ">Kedvencek</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="kapcsolat.html ">Kapcsolat</a>
                    </li>
                </ul>
            </div>
    </nav>

    <main>
        <div id="myCarousel" class="carousel slide " data-ride="carousel ">
            <!--Indikátorok-->
            <ul class="carousel-indicators ">
                <li data-target="#myCarousel " data-slide-to="0 " class="active "></li>
                <li data-target="#myCarousel " data-slide-to="1 "></li>
                <li data-target="#myCarousel " data-slide-to="2 "></li>
            </ul>
            <!--A diavetítés-->
            <div class="carousel-inner " role="listbox ">
                <div class="carousel-item active "><img class="img-fluid " src="./restauralas/akac_a_parton/ilyen_volt.JPG " alt="First slide "><img class="img-fluid " src="./restauralas/akac_a_parton/keszen.JPG " alt="First slide ">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Restaurálás: Akác a parton</h5>
                    </div>
                </div>
                <div class="carousel-item "><img class="img-fluid " src="./restauralas/keleti_setalo_utca/DSCN1314.JPG " alt="Second slide "><img class="img-fluid " src="./restauralas/keleti_setalo_utca/DSCN1313.JPG " alt="Second slide ">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Restaurálás: Keleti sétálóutca</h5>
                    </div>
                </div>
                <div class="carousel-item "><img class="img-fluid " src="./restauralas/lovak_a_tengerparton/DSCN1251.JPG " alt="Third slide "><img class="img-fluid " src="./restauralas/lovak_a_tengerparton/DSCN1268.JPG " alt="Third slide ">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Lovak a tengerparton</h5>
                    </div>
                </div>
                <div class="carousel-item "><img class="img-fluid " src="./restauralas/festmeny_tisztitas1/ilyen_volt.jpg " alt="Fourth slide "><img class="img-fluid " src=" ./restauralas/festmeny_tisztitas1/ilyen_lett.jpg " alt="Fourth slide ">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Restaurálás: Festmény-tisztítás</h5>
                    </div>
                </div>
                <div class="carousel-item "><img class="img-fluid " src="./pics/carousel/oila01.jpg " alt="Fifth slide "><img class="img-fluid " src="./pics/carousel/oila02.jpg " alt="Fifth slide ">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Olajfestmények</h5>
                    </div>
                </div>
            </div>
        </div>
        <!---slide vége-->
    </main>
    <footer class="bg-info ">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-6 col-md-2 m-footer-contact ">
                    <a class="navbar-brand " href="index.html ">
                        <h4>Gólyaműhely</h4>
                        <h6>BUDAPEST, 2020
                        </h6>
                    </a>
                </div>
                <div class="col-sm-6 col-md-2 m-footer-nav ">
                    <strong>Fontosabb munkáim</strong>
                    <ul>
                        <li>
                            <a href="olajfestmeny.html ">Olajfestmény</a>
                        </li>
                        <li>
                            <a href="grafika.html ">Grafika</a>
                        </li>
                        <li>
                            <a href="mozaik.html ">Mozaik</a>
                        </li>
                        <li>
                            <a href="butor.html ">Bútor</a>
                        </li>
                        <li>
                            <a href="mese.html ">Mese</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2 m-footer-nav ">
                    <strong>Referenciák</strong>
                    <ul>
                        <li>
                            <a href="restauralas.html ">Restaurálás</a>
                        </li>
                        <li>
                            <a href="mesegrafika.html ">Mesegrafika</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2 m-footer-nav ">
                    <strong>Információ</strong>
                    <ul>
                        <li>
                            <a href="bemutatkozas.html ">Bemutatkozás</a>
                        </li>
                        <li>
                            <a href="gyik.html ">Kérdések és válaszok</a>
                        </li>
                        <li>
                            <a href="linkek.html ">Linkek</a>
                        </li>
                        <li>
                            <a href="ajandekok.html ">Ajándéktárgyak</a>
                        </li>
                        <li>
                            <a href="kedvencek.html ">Kedvencek</a>
                        </li>
                        <li>
                            <a href="kapcsolat.html ">Kapcsolat</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2 m-footer-nav ">
                    <strong>Kapcsolat</strong>
                    <ul>

                        <li>
                            <a href="https://www.facebook.com/G%C3%B3lyam%C5%B1hely-136971399775847/ "><img src="pics\flaticons\facebook\icons8-facebook-32.png " alt="Facebook " id="fbikon "></a>
                        </li>
                        <li>
                            <img src="pics\flaticons\Call\icons8-phonelink-ring-32.png " alt="Image " id="telefonikon ">
                            <span class="menu_telefonszam ">06-20-482-3933</span>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-6 col-md-2 m-footer-nav ">
                    <strong>Információ</strong>
                    <ul>
                        <li>
                            <form class="example " action=" " style="margin:auto;max-width:300px ">
                                <input type="text " placeholder="Keresés.. " name="keresomezo">
                                <button type="submit" onclick="showResults()">
                                    <i class="fa fa-search "></i>
                                    <!--Keresés--->
                                    <?php
                                    if(isset($_GET['submit'])){
                                        $searchTerm = $GET['keresomezo'];
                                        echo "<p>"."Keresett kifejezés:".$searchTerm."</p>";
                                    }
                                     //eredmények
                                     $searchResults = array(
                                        "Elsőt találat",
                                        "Második találat",
                                        "Harmadik találat"
                                     );
                                    ?>
                            
                                    
                                </button>
                            </form>

                        </li>

                    </ul>
                    
  <div id="popup" class="popup">
    <h2>Keresési eredmények</h2>
    <p>Ez itt egy példa a keresési eredményekre.</p>
    <ul>
      <li>Eredmény 1</li>
      <li>Eredmény 2</li>
      <li>Eredmény 3</li>
    </ul>
    <button onclick="hideResults()">Bezárás</button>
  </div>

  <div id="overlay" class="overlay"></div>
                </div>
            </div>
            <!---row vége--->
        </div>
        <!---container vége--->
    </footer>
    <script src=" ./js/search.js "></script>
    <script src=" ./js/jquery-3.1.1.slim.min.js "></script>
</body>

</html>

</html>