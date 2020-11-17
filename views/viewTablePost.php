<?php $this->title = "Tableau des chapitres";
?>
<div class="tablepost">

    <p><a class="nav-link" href="index.php">
            <- Retour à l'accueil </a> </p> <p>Il y a actuellement chapitre(s).<br> En voici la liste:</p><br>
    <div class="container my-5">
        <section>
            <?php foreach ($chapters as $chapter) : ?>
                <table class="table table-striped">
                    <thead>
                        <tr class="text-justify">
                            <th scope="col" class="text-justify">N°</th>
                            <th scope="col" class="text-justify">Titre</th>
                            <th scope="col" class="text-justify">Date d'ajout</th>
                            <th scope="col" class="text-justify">Dernière modification</th>
                            <th scope="col" class="text-justify">Action</th>
                            <th scope="col" class="text-justify">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-justify">
                            <th scope="row" class="text-center"><?= $chapter->id() ?></th>
                            <td class="text-justify"><?= $chapter->chap_title() ?></td>
                            <td class="text-justify"><?= $chapter->chap_date_info() ?></td>
                            <td class="text-justify"><?= $chapter->chap_date_modif() ?></td>
                            <td class="text-justify">
                                <!-- class="text-success" href="Post&updateChapter&id=?= $chapter->id() ?>">modifier</!-->
                                <a class="text-success" href="Post&updateChapter&id=<?= $chapter->id() ?>">modifier</a>
                            </td>
                            <td class="text-justify">
                                <a class="text-danger" href="Post&deletePost&id=<?= $chapter->id() ?>">supprimer</a>
                            </td>

                        </tr>
                    </tbody>
                </table>

            <?php endforeach; ?>
        </section>
    </div>
</div>