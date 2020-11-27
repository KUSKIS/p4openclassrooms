<?php $this->title = "Commentaire"; ?>

<div class="onecommentaire">

    <p><a class="nav-link" href="index.php">
            <- Retour à l'accueil </a></p>
            <section>
                <h2 class="h1-responsive font-weight-bold text-center my-4">Signaler un commentaire</h2>
                <p class="text-center w-responsive mx-auto mb-5">L'administrateur de ce site se réserve le droit de supprimer les commentaires</p>
                <form action="post&report&id=alert" method="post">
                    <div class="card-footer white py-3">
                        <div class="form-group mb-0">
                            <input type="hidden" name="id" value="<?= $comment['id'] ?>" />
                            <p class="font-weight-normal mb-0">Voici Le commentaire de <?= $comment['com_user'] ?></p>
                            <p><?= $comment['com_content'] ?></p>
                            <div class="text-right pt-1">
                                <input type="submit" class="btn btn-info" value="signaler ce commentaire" />
                            </div>
                        </div>
                </form>
            </section>
</div>