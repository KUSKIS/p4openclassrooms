<?php $this->title = "Espace admin"; ?>

<div class="containwritten">
    <p><a class="nav-link" href="index.php">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil</a></p>
    <h2 class="h1-responsive font-weight-bold text-center my-4">Espace d'administration</h2>
    <div class="container my-5">
        <section class="team-section">
            <div class="card">
                <div class="card-header white text-center">
                    <p class="h5-responsive font-weight-bold mb-0">Membre(s)</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-8 pb-4">
                            <div class="avatar white text-center">
                                <img src="public/image/jeanforteroche.jpg" class="img-fluid z-depth-1" alt="jean forteroche" />
                            </div>
                            <div class="text-center mt-2">
                                <h6 class="font-weight-bold pt-2 mb-0"><?= $user['pseudo'] ?></h6>
                                <p class="text-muted mb-0"><a href="post&createPost">Espace de travail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer white text-center py-3">
                </div>
            </div>
        </section>
    </div>
</div>