<?php $this->title = "Commentaire"; ?>

<div class="onecommentaire" class="row">

    <p><a class="nav-link" href="index.php">
            <- Retour à l'accueil </a> </p> <section>
                <form action="post&report&id=alert" method="post">
                    <div class="card-footer white py-3">
                        <div class="form-group mb-0">
                            <input type="text" name="id" value="<?= $comment['id'] ?>" />
                            <p class="font-weight-normal mb-0">Voici Le commentaire de  <?= $comment['com_user'] ?></p>

                            <p><?= $comment['com_content'] ?></p>
                            <div class="text-right pt-1">
                                <input type=submit value="signaler ce commentaire" />
                            </div>
                        </div>
                </form>
                </section>
</div>