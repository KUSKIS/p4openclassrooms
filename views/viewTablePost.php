<?php $this->title = "Tableau des chapitres"; ?>


<div class="tablepost">

    <p><a class="nav-link" href="Post&createPost">
            <- Retour à l'espace d'administration </a> </p> <div class="container my-5">
                <section>
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Liste des chapitres</h2>
                    <p class="text-center w-responsive mx-auto mb-5">Voici le tableau des chapitres où il vous est possible
                        de modifier un chapitre ou bien de le supprimer.</p>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Chapitre n°</th>
                                    <th scope="col" class="text-center">Titre</th>
                                    <th scope="col" class="text-center">Date d'ajout</th>
                                    <th scope="col" class="text-center">Dernière modification</th>
                                    <th scope="col" class="text-center">Action</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($chapters as $chapter) : ?>
                                    <tr>
                                        <td scope="row" class="text-center"><?= $chapter->id() ?></td>
                                        <td scope="row" class="text-center"><?= $chapter->chap_title() ?></td>
                                        <td scope="row" class="text-center"><?= $chapter->chap_date_info() ?></td>
                                        <td scope="row" class="text-center"><?= $chapter->chap_date_modif() ?></td>
                                        <td scope="row" class="text-center">
                                            <a class="text-success" href="Post&updateChapter&id=<?= $chapter->id() ?>">modifier</a>
                                        </td>
                                        <td scope="row" class="text-center">
                                            <a class="text-danger" href="Post&deletePost&id=<?= $chapter->id() ?>">supprimer</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
</div>
</div>