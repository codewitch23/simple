<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
{{---------------------------------------------
                   <<Navbar>>
----------------------------------------------}}
<nav class="navbar navbar-expand-lg navbar-light bg-light py-5">
    <div class="container ">
        <a class="navbar-brand text-danger site-logo" href="#">GameWars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active px-4">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="#">Aticles</a>
                </li>
                <li class="nav-item  px-4">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{---------------------------------------------
                    <<carousel>>
----------------------------------------------}}

<div class="row">
    <div class="col-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
{{---------------------------------------------
                  <<On-fire-title>>
----------------------------------------------}}
<div class="row py-5">
    <div class="col-12 " data-aos="fade-right"
         data-aos-offset="300"
         data-aos-easing="ease-in-sine">

        <div class="display2 text-center  "><h1>ON FIRE</h1>
            <span class="line w-75 align-items-center"></span>
        </div>
    </div>
</div>
{{---------------------------------------------
                  <<hot-article>>
----------------------------------------------}}
<div class="container ">
    <div class="row  py-5 ">
        <div class="col-lg-3 col-md-6 hot-article"
             data-aos="fade-up" data-aos-delay="200">
            <div class="hotArticle-img  mb-4 ">
                <a href="#"><img  src="img/assassins.jpg"  alt="" class="img-fluid"></a>
                <div class="article-info bg-dark text-center text-muted">
                    <a href=""><h4>assassins creed</h4></a>
                    <p>release 2020 aug</p>
                </div>
            </div>


        </div>
        <div class="col-lg-3 col-md-6 mb-4"
             data-aos="fade-up"
             data-aos-delay="200 ">
            <div class="hotArticle-img ">
                <a href="#"><img src="img/assassins2.jpg" alt="" class="img-fluid"></a>
                <div class="article-info bg-dark text-center text-muted">
                    <a href=""><h4>assassins creed</h4></a>
                    <p>release 2020 aug</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4"
             data-aos="fade-up"
             data-aos-delay="200 ">
            <div class="hotArticle-img">
                <a href="#"><img src="img/lastous.jpg" alt="" class="img-fluid"></a>
                <div class="article-info bg-dark text-center text-muted">
                    <a href=""><h4>the last of us</h4></a>
                    <p>release 2020 aug</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4"
             data-aos="fade-up"
             data-aos-delay="200 ">
            <div class="hotArticle-img">
                <a href="#"><img src="img/need.jpg" alt="" class="img-fluid"></a>
                <div class="article-info bg-dark text-center text-muted">
                    <a href=""><h4>Need For Speed</h4></a>
                    <p>release 2020 aug</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{---------------------------------------------
                  <<hot-article>>
----------------------------------------------}}



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
