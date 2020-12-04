<?php $this->title = "Commentaire"; ?>

<div class="containwritten">
    <p><a class="nav-link" href="index.php">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil</a></p>
    <section>
        <h2 class="h1-responsive font-weight-bold text-center my-4">Exprimez-vous</h2>
        <p class="text-center w-responsive mx-auto mb-5">Parce que votre avis m'est précieux et qu’il est susceptible d’intéresser
            les autres lecteurs, il vous est possible de laisser un commentaire.</p>
        <form action="post&etat&id=newcomment" method="post">
            <div class="card-footer white py-3">
                <div class="form-group mb-2">
                    <input type="hidden" name="chapter_id" value="<?= $chapter['id'] ?>" />
                    <label for="user">Pseudo </label><br>
                    <input type="text" class="form-control" name="com_user" id="pseudo" placeholder="Votre pseudo" required />
                    <span id="missPseudo"></span><br>
                    <label for="textComment">Commentaire </label>
                    <textarea class="form-control" rows="3" placeholder="Ecrire un commentaire" name="com_content" required></textarea><br>
                    <div class="text-right pt-1">
                        <input class="btn btn-info" type="submit" id="buttonSend" />
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>