<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
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
                    <a class="nav-link" href="#">Home<span class="line sr-only">(current)</span></a>
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

@yield('header')
@yield('onfire')
@yield('hotArticle')
{{---------------------------------------------
                  <<latest-article>>
----------------------------------------------}}
<section id="latestArticle">
    <hr class="w-75">
    <div class="row">
        <div class="col-12 pb-5">
            <h1 class="display-4 text-center"> Latest Article</h1>
        </div>
    </div>

    <hr class="w-75">
    <div class="container ">
        <div class="row no-gutters ">
            <div class="col-8 no-gutters">
                <div class="col-12  ">
                    <div class="row no-gutters">
                        <div class="col-4">
                            <img src="img/need.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-8 px-4">
                            <a href=""><h1>Title</h1></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur distinctio
                                eligendi illum molestias nulla odio optio, quasi rem repudiandae!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</section>
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
