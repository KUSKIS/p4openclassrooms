<?php $this->title = "Connexion de l'administrateur"; ?>

<div class="deleteform">
    <div class="container my-5 px-0 z-depth-1">
        <section class="p-5 my-md-5 text-center" style="background-image: url(public/image/route.jpg); background-size: cover; background-position: center center;">
            <div class="my-5 mx-md-5">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <form class="text-center" action="post&check=ok" method="post">
                                    <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Connexion à l'espace administration</h3>
                                    <input type="text" name="pseudo" id="defaultSubscriptionForm" class="form-control mb-4" placeholder="Pseudo">
                                    <input type="password" name="pass" id="defaultSubscriptionFormPassword" class="form-control" placeholder="Mot de passe">
                                    <small id="passwordHelpBlock" class="form-text text-right blue-text">
                                    </small><br>
                                    <div class="text-center">
                                        <a href=""><button type="submit" class="btn btn-info">Se connecter</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>