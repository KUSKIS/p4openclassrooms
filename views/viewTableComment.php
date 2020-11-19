<<<<<<< Updated upstream
<?php $this->title = "Tableau des commentaires";
?>
<div class="tablecomment">

    <p><a class="nav-link" href="index.php?">
            <- Retour à l'accueil </a> </p> <p>Il y a actuellement commentaire(s).<br> En voici la liste:</p><br>
=======
<?php $this->title = "Tableau des commentaires"; ?>
<div class="tablecomment">

    <p><a class="nav-link" href="index.php?">
            <- Retour à l'accueil </a> </p> <p>Il y a actuellement commentaire(s) dont signalé(s).<br> En voici la liste:</p><br>
>>>>>>> Stashed changes
    <div class="container my-5">
        <section>
            <?php foreach ($comments as $comment) : ?>
                <table class="table table-striped">
                    <thead>
                        <tr class="text-justify">
                            <th scope="col" class="text-justify">N°</th>
                            <th scope="col" class="text-justify">Pseudo</th>
                            <th scope="col" class="text-justify">contenu</th>
                            <th scope="col" class="text-justify">Date</th>
<<<<<<< Updated upstream
=======
                            <th scope="col" class="text-justify">Commentaire signalé</th>
>>>>>>> Stashed changes
                            <th scope="col" class="text-justify">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-justify">
                            <th scope="row" class="text-center"><?= $comment->id() ?></th>
                            <td class="text-justify"><?= $comment->com_user() ?></td>
<<<<<<< Updated upstream
                            <td class="text-justify"><?= $comment->com_content() ?></td>
                            <td class="text-justify"><?= $comment->com_date() ?></td>
=======
                            <td class="text-justify"><!--?= $comment->com_content() --></td>
                            <td class="text-justify"><?= $comment->com_date() ?></td>
                            <td class="text-justify"><?= $comment->alert() ?></td>
>>>>>>> Stashed changes
                            <td class="text-justify">
                                <a class="text-danger" href="Post&deleteComment&id=<?= $comment->id() ?>">supprimer</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </section>
    </div>
</div>