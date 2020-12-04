<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
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
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chapitres</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="post&id=1">Un homme pressé</a>
                                <a class="dropdown-item" href="post&id=2">Ester Dôme</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="post&id=3">Mais où est passé le corps ?</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
    </header>
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Connexion</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form action="post&check=ok" method="post">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" name="pseudo" id="defaultForm-email" class="form-control validate" required>
                            <label data-error="" data-success="" for="defaultForm-text">Pseudo</label>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" name="pass" id="defaultForm-pass" class="form-control validate" required>
                            <label data-error="" data-success="" for="defaultForm-pass">Mot de Passe</label>
                        </div><br>
                        <div class="modal-footer d-flex justify-content-center"><br>
                            <button type="submit" class="btn btn-info">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section id="chapterslist">
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
                    <h6 class="text-uppercase font-weight-bold">Product</h6>
                    <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #264d73!important;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Administration</h6>
                    <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #264d73!important;">
                    <p>
                        <a class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Connexion</a>
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
    <script type="text/javascript" src="public/form.js"></script>

</body>

</html>