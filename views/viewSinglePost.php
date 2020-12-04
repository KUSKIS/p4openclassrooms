<?php $this->title = "Chapitre"; ?>

<div class="containwritten" class="row">
    <div class="col-md-8 col-lg-12 mx-auto">
        <p><a class="nav-link" href="index.php">
                <i class="fas fa-arrow-left"></i> Retour à l'accueil</a></p>
        <div class="container my-5">
            <section>
                <div class="card card-list">
                    <div class="card-header white d-flex justify-content-between align-items-center py-3">
                        <div class="d-flex justify-content-start align-items-center">
                            <img src="public/image/jeanforteroche.jpg" class="z-depth-1 rounded-circle" width="45" alt="avatar image">
                            <div class="d-flex flex-column pl-3">
                                <a href="Home" class="font-weight-normal mb-0">Jean Forteroche</a>
                                <p class="small text-muted mb-0">Edité le : <?= $chapter['chap_date_info'] ?></p>
                                <p class="small text-muted mb-0">Modifié le : <?= $chapter['chap_date_modif'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2><?= $chapter['chap_title'] ?></h2><br>
                        <p><?= $chapter['chap_content'] ?></p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="d-flex flex-row">
                            </div>
                            <div class="d-flex flex-column pl-3">
                                <a href="post&createComment&id=<?= $chapter['id'] ?>" class="btn btn-info btn-sm py-1 px-2 m-0 mr-2"><i class="far fa-comment pr-1"></i> je commente</a>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($comments as $comment) : ?>
                        <div class="py-4 grey lighten-4">
                            <div class="px-3">
                                <div class="d-flex flex-column pl-3">
                                    <div>
                                        <p class="font-weight-normal mb-0"><?= $comment->com_user() ?></p>
                                        <p class="small text-muted float-right mb-0"><?= $comment->com_date() ?></p>
                                    </div>
                                    <p class="font-weight-light dark-grey-text mb-0"><?= $comment->com_content() ?></p>
                                </div>
                                <br>
                                <div class="text-right pt-1">
                                    <a href="Post&oneComment&id=<?= $comment->id() ?> " class="btn btn-fb btn-sm py-1 px-2 m-0 mr-2"><i class="far fa-flag"></i> je signale</a>
                                </div>
                                <hr class="my-3">
                            </div>
                        <?php endforeach; ?>
                        </div>
                </div>
            </section>
        </div>
    </div>
</div>
<br>