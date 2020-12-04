<?php $this->title = "modification chapitre"; ?>

<div class="containwritten">
    <p><a class="nav-link" href="index.php?tablePost">
            <i class="fas fa-arrow-left"></i> Retour à la liste des chapitres</a></p>
    <div class="container my-5">
        <section>
            <h2 class="h1-responsive font-weight-bold text-center my-4">Modification du chapitre<br>"<?= $chapter['chap_title'] ?>"<br></h2>
            <div class="card card-list">
                <div class="card-header white d-flex justify-content-between align-items-center py-3">
                    <p class="h5-responsive font-weight-bold mb-0">Voici votre éditeur de texte</p>
                </div>
                <form action="post&modif&id=modifpost" method="post" class="card-body">
                    <input type="hidden" name="id" value="<?= $chapter['id'] ?>" />
                    <input type="text" id="exampleForm2" name="chap_title" value="<?= $chapter['chap_title'] ?>" placeholder="Titre de ton chapitre" class="form-control rounded-0 mb-3" required />
                    <textarea id="text" name="chap_content" required>
                                <?= $chapter['chap_content'] ?>
                    </textarea>
                    <div class="card-footer white py-3">
                        <div class="text-right">
                            <button type="submit" class="btn btn-info btn-md px-3 my-0 mr-0">
                                Modifie ton oeuvre<i class="fas fa-book-open pl-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>