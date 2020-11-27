<?php $this->title = "Tableau des commentaires"; ?>


<div class="tablecomment">

    <p><a class="nav-link" href="index.php?">
            <- Retour à l'accueil </a> </p> <div class="container my-5">
                <section>
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Liste des commentaires</h2>
                    <p class="text-center w-responsive mx-auto mb-5">Voici le tableau des commentaires où il vous est possible
                        de supprimer un commentaire signalé.</p>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Commentaire n°</th>
                                    <th scope="col" class="text-center">Pseudo</th>
                                    <th scope="col" class="text-center">Contenu</th>
                                    <th scope="col" class="text-center">Date</th>
                                    <th scope="col" class="text-center">Commentaire signalé</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($comments as $comment) : ?>
                                    <tr>
                                        <td scope="row" class="text-center"><?= $comment->id() ?></td>
                                        <td scope="row" class="text-center"><?= $comment->com_user() ?></td>
                                        <td scope="row" class="text-center"><?= $comment->com_content() ?></td>
                                        <td scope="row" class="text-center"><?= $comment->com_date() ?></td>
                                        <th scope="row" class="text-center"><?= $comment->alert() ?></th>
                                        <td scope="row" class="text-center">
                                            <a class="text-danger" href="Post&deleteComment&id=<?= $comment->id() ?>">supprimer</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
</div>
</div>