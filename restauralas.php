<html>

<head>
    <meta name="author" content="Nagy Zoltán">
    <meta charset="utf-8">
    <title>Golyamuhely</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="./css/app.css" />
    <link rel="stylesheet" type="text/css" href="./css/restauralas.css" />
    <link href="https://fonts.googleapis.com/css?family=Barrio|Bungee+Inline|Hind+Siliguri|Miniver|PT+Serif|Zilla+Slab+Highlight&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js 
        " integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-toggleable-md  navbar-dark bg-info">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class = "navbar-toggler-icon"></span> 
            </button>
            <a class="navbar-brand" href="index.html">
                Gólyaműhely<br />
                <img src = "./pics/ico/ahtale2.png" class = "rounded-circle" alt = "" title = "Gólyaműhely" role = "img">
              
                
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Főoldal<span class = "sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="bemutatkozas.html">Bemutatkozás</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="referenciak.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Referenciák
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="festmeny-restauralas.html">Restaurálás</a>

                            <a class="dropdown-item" href="grafika.html">Grafika</a>


                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="olajfestmenyek.html">Olajfestmény</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mozaik.html">Mozaik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="butor.html">Bútor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mese.html">Mese</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajandektargyak.html">Ajándéktárgyak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kedvencek.html">Kedvencek</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="kapcsolat.html">Kapcsolat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>



    </header>
    <main class="">
        <!-----Fősor--------------------------->

        <div class="row">

            <div class="col-md-2 col-lg-2" mr-5>
                <div class="tab-" id="oldalMenu">

                    <!-------1.gombcsoport--------------->
                    <div class="container tab-pane active">
                        <!-------1.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep1')" id="k1">
      <h4>Az idő vasfoga</h4>
      </button>
                        <!-------1.választó---------vége------>

                        <!-------2.választó--------------->
                        <button class="container tab-pane fade" onclick="kepValasztas(event,'kep2')" id="k2">
      <h4>A lány korabeli ruhában</h4>
      </button>
                        <!-------2.választó---------vége------>
                    </div>
                    <!-------1.gombcsoport-------vége-------->


                    <!-------2.gombcsoport--------------->
                    <div class="btn-group">
                        <!-------3.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep3')" id="k3">
      <h4>Akác a parton</h4>
      </button>
                        <!-------3.választó---------vége------>

                        <!-------4.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep4')" id="k4">
      <h4>Keleti sétáló utca</h4>
      </button>
                        <!-------4.választó---------vége------>
                    </div>
                    <!-------2.gombcsoport-------vége-------->

                    <!-------3.gombcsoport--------------->
                    <div class="btn-group">
                        <!-------5.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep5')" id="k5">
      <h4>Lovak a tengerparton</h4>
      </button>
                        <!-------5.választó---------vége------>

                        <!-------6.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep6')" id="k6">
      <h4>Erdő takarítás</h4>
      </button>
                        <!-------6.választó---------vége------>
                    </div>
                    <!-------3.gombcsoport-------vége-------->

                    <!-------4.gombcsoport--------------->
                    <div class="btn-group">
                        <!-------7.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep7')" id="k7">
      <h4>Jézus érkezése</h4>
      </button>
                        <!-------7.választó---------vége------>

                        <!-------8.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep8')" id="k8">
      <h4>Jézus a kereszten</h4>
      </button>
                        <!-------8.választó---------vége------>
                    </div>
                    <!-------4.gombcsoport-------vége-------->

                    <!-------5.gombcsoport--------------->
                    <div class="btn-group">
                        <!-------9.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep9')" id="k9">
      <h4>Madonna</h4>
      </button>
                        <!-------9.választó---------vége------>

                        <!-------10.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep10')" id="k10">
      <h4>Kis házikó-Restaurálva!</h4>
      </button>
                        <!-------10.választó---------vége------>
                    </div>
                    <!-------5.gombcsoport-------vége-------->

                    <!-------6.gombcsoport--------------->
                    <div class="btn-group">
                        <!-------11.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep11')" id="k11">
      <h4>Nyár</h4>
      </button>
                        <!-------11.választó---------vége------>

                        <!-------12.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep12')" id="k12">
      <h4>Koszos utca megtisztítva!</h4>
      </button>
                        <!-------12.választó---------vége------>
                    </div>
                    <!-------6.gombcsoport-------vége-------->

                    <!-------7.gombcsoport--------------->
                    <div class="btn-group">
                        <!-------13.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep13')" id="k13">
      <h4>Festmény tisztítás 1</h4>
      </button>
                        <!-------13.választó---------vége------>

                        <!-------14.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep14')" id="k14">
      <h4>Festmény tisztítás 2</h4>
      </button>
                        <!-------14.választó---------vége------>
                    </div>
                    <!-------7.gombcsoport-------vége-------->

                    <!-------8.gombcsoport--------------->
                    <div class="btn-group">
                        <!-------15.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep15')" id="k15">
      <h4>Évtizedes kosz-Letisztítva!</h4>
      </button>
                        <!-------15.választó---------vége------>

                        <!-------16.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep16')" id="k16">
      <h4>Festmény restaurálás</h4>
      </button>
                        <!-------16.választó---------vége------>
                    </div>
                    <!-------8.gombcsoport-------vége-------->

                    <!-------9.gombcsoport--------------->
                    <div class="btn-group">
                        <!-------17.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep17')" id="k17">
      <h4>Tisztítás és restaurálás</h4>
      </button>
                        <!-------17.választó---------vége------>

                        <!-------18.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep18')" id="k18">
      <h4>Képrestaurálás</h4>
      </button>
                        <!-------18.választó---------vége------>
                    </div>
                    <!-------9.gombcsoport-------vége-------->

                    <!-------10.gombcsoport--------------->
                    <div class="btn-group">
                        <!-------19.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep19')" id="k19">
      <h4>Krasznahorka vára</h4>
      </button>
                        <!-------19.választó---------vége------>


                        <!-------20.választó--------------->
                        <button class="tablinks" onclick="kepValasztas(event,'kep20')" id="k20">
      <h4>Nagy képkeret</h4>
      </button>
                        <!-------20.választó---------vége------>
                    </div>
                    <!-------10.gombcsoport-------vége-------->

                    <!-------21.választó--------------->
                    <button class="tablinks" onclick="kepValasztas(event,'kep21')" id="k21">
      <h4>Kis képkeret</h4>
      </button>
                    <!-------21.választó---------vége------>



                </div>
                <!----oldalMenu--Tab---vége---->
            </div>
            <!---col-md-6--col-lg-2-vége---------->







            <div class="col-md-10 col-lg-9" id="kozepso">
                <div class="col-md-12 mt-3">
                    <div class="row">

                        <div class="gombok">
                            <button type="button" id="myBtn" class="btn btn-success">Vissza</button><br />
                            <button type="button" id="btnElore" class="btn btn-primary">Előre</button>
                        </div>
                        <!-- The carousel -->
                        <div id="myCarousel" class="carousel slide mt-4" data-interval="0">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li class="item1 active"></li>
                                <li class="item2"></li>
                                <li class="item3"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <!--carousel elem--->
                                <div class="carousel-item active">
                                    <div class="carousel-caption" id="elsoTema">
                                        <p>Sok-sok hiba közelről</p>
                                    </div>
                                    <div class="kepek">
                                        <img class="img-fluid" src=".\restauralas\az_ido_vasfoga\rest57.jpg" alt="ilyen volt">

                                    </div>
                                </div>
                                <!--carousel elem--->
                                <div class="carousel-item">
                                    <div class="carousel-caption" id="elsoTema">
                                        <p>Hatalmas hiányosságok</p>
                                    </div>
                                    <div class="kepek">
                                        <img class="img-fluid" src=".\restauralas\az_ido_vasfoga\rest58.jpg">

                                    </div>
                                </div>
                                <!--Carousel elem--1-->
                                <div class="carousel-item " id="azidovasfoga">
                                    <div class="carousel-caption" id="elsoTema">
                                        <p>Az idő vasfoga</p>
                                    </div>
                                    <div class="kepek">
                                        <img class="img-fluid" src=".\restauralas\az_ido_vasfoga\rest55.jpg" alt="ilyen volt">
                                        <img class="img-fluid" src=".\restauralas\az_ido_vasfoga\rest56.jpg" alt="ilyen ilyen lett">
                                    </div>
                                </div>

                                <!--carousel elem--2--->
                                <div class="carousel-item ">
                                    <div class="carousel-caption" id="masodikTema">
                                        <p>Az lány korabeli ruhában</p>
                                    </div>
                                    <div class="kepek">
                                        <img class="img-fluid" src=".\restauralas\lany_korabeli_ruhaban\ilyenvolt.jpg">
                                        <img class="img-fluid" src=".\restauralas\lany_korabeli_ruhaban\ilyenlett.jpg">
                                    </div>
                                </div>

                                <!--carousel elem--3--->
                                <div class="carousel-item ">
                                    <div class="carousel-caption" id="masodikTema">
                                        <p>Kosz mindenütt</p>
                                    </div>
                                    <div class="kepek">
                                        <img class="img-fluid" src=".\restauralas\lany_korabeli_ruhaban\koszmindenutt.jpg">
                                    </div>
                                </div>

                                <!--Carousel elem---4-->
                                <div class="carousel-item ">
                                    <div class="carousel-caption" id="masodikTema">
                                        <p>Hatalmas szakadás</p>
                                    </div>
                                    <div class="kepek">
                                        <img class="img-fluid" src=".\restauralas\lany_korabeli_ruhaban\szakadas.jpg" alt="ilyen volt">

                                    </div>
                                </div>

                                <!--Carousel elem-5---->
                                <div class="carousel-item ">
                                    <div class="carousel-caption" id="masodikTema">
                                        <p>Szakadás hátulról</p>
                                    </div>
                                    <div class="kepek">
                                        <img class="img-fluid" src=".\restauralas\lany_korabeli_ruhaban\szakadas_hatulrol.jpg" alt="ilyen volt">

                                    </div>
                                </div>

                                <!--Carousel elem--6--->
                                <div class="carousel-item ">
                                    <div class="carousel-caption" id="masodikTema">
                                        <p>Szakadás befoltozva; Tisztítás próbák</p>
                                    </div>
                                    <div class="kepek">
                                        <img class="img-fluid" src=".\restauralas\lany_korabeli_ruhaban\tisztitas_befoltozva.jpg" alt="ilyen volt">

                                    </div>
                                </div>

                                <!--carousel elem--7--->
                                <div class="carousel-item ">
                                    <div class="carousel-caption" id="masodikTema">
                                        <p>Az lány korabeli ruhában</p>
                                    </div>
                                    <div class="kepek">
                                        <img class="img-fluid" src=".\restauralas\lany_korabeli_ruhaban\ilyenvolt.jpg" alt="ilyen volt">
                                        <img class="img-fluid" src=".\restauralas\lany_korabeli_ruhaban\ilyenlett.jpg" alt="ilyen lett">
                                    </div>
                                </div>


                            </div>
                            <!--carousell inner vége-->


                        </div>
                        <!--mycarousel, carousel-slide vég-->
                    </div>
                </div>
                <!--container mt-3 vége-->
            </div>
            <!-----col-md-12 vége--->

        </div>
        <!---Fősor vége------->

    </main>
    <footer class="bg-info ">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-6 col-md-2 m-footer-contact ">
                    <a class="navbar-brand " href="index.html ">
                        <h4>Gólyaműhely</h4>
                        <h6>BUDAPEST, 2020-2023
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
                            <form class="example" method="post" action="kereses.php" style="margin:auto;max-width:300px ">
                                <input type="text " placeholder="Keresés.. " name="search">
                                <button type="submit" id="keresoGomb">
                                    <i class="fa fa-search "></i>

                                </button>
                            </form>

                        </li>

                    </ul>

                    <?php require 'kereses.php';?>

                </div>

            </div>
            <!---row -vége--->
        </div>
        <!---container vége--->
    </footer>




    <script src="./js/jquery-3.1.1.slim.min.js"></script>
    <srcipt src="./js/tether.min.js"></srcipt>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/restauralas.js"></script>
</body>

</html>