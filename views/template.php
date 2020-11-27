<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/uanhlhi99qxpp27vqve0o6abe0iulcyje5ybsdh0tbbihv82/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="public/index.css">
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark primary-color">
            <a class="navbar-brand" href="#">Jean Forteroche</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Chapitres</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#navbar-example2-one">Un homme pressé</a>
                            <a class="dropdown-item" href="#navbar-example2-two">Mais où est passé le corps ?</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#navbar-example2-three">Un dernier verre</a>
                        </div>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link border border-light rounded waves-effect mr-2" target="_blank">
                            <?php if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {
                                echo 'Bonjour ' . $_SESSION['pseudo'];
                            } ?>
                            <i class="fas fa-lock-open"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    <section id=" chapterslist">
        <?= $content ?>
    </section>

    <footer class="page-footer font-small unique-color-dark">

        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Rejoignez-moi sur les réseaux sociaux!</h6>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <a class="ins-ic">
                        <i class="fab fa-instagram white-text"> </i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container text-center text-md-left mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Yukon Editions</h6>
                    <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #264d73!important;">
                    <p>Yukon est une maison d'édition franco-canadienne créée en 1992 par Jean Forteroche et par son ami de longue date, Jimmy Chief représentant du peuple autochtone les "Tsleil-Waututh".</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #264d73!important;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Liens utiles</h6>
                    <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #264d73!important;">
                    <p>
                        <a href="index.php">Accueil</a>
                    </p>
                    <p>
                        <a href="index.php?connectAdmin">Admin</a>
                    </p>
                </div>
                <div class=" col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #264d73!important;">
                    <p>
                        <i class="fas fa-home mr-3"></i> 201 Wood St, Whitehorse, YT Y1A 2E4, Canada</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> yukoneditions@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> +1 867-393-9500</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            <p>Projet réalisé par Sabine Maillet dans le cadre de la formation DWJ Openclassrooms</p>
        </div>

    </footer>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>

    <script type="text/javascript" src="public/tiny.js"></script>



</body>

</html>