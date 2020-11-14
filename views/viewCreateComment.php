<?php $this->title = "Commentaire"; ?>

<div class="commentform">
    <p><a class="nav-link" href="index.php">
            <- Retour à l'accueil </a> </p> <section>
                <form action="post&etat=newcomment&amp;id=" method="post">
                    <div class="card-footer white py-3">
                        <div class="form-group mb-0">
                            <label for="chapitre">chapitre : </label>
                            <input type="text" name="chapter_id" value="" />
                            <label for="user">Pseudo</label>
                            <input type="text" id="user" name="com_user" />
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="2" placeholder="Ecrire un commentaire" name="com_content"></textarea>
                            <div class="text-right pt-1">
                                <input type=submit />
                            </div>
                        </div>
                </form>
                </section>
</div>