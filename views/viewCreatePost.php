<?php $this->title = "Ecrire"; ?>


<div class="containwritten">
    <p><a class="nav-link" href="index.php">
            <- Retour à l'accueil </a> </p> <div class="container my-5">
                <section>
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Bienvenue dans votre espace d'administration <br><?= $user['pseudo'] ?></h2>
                    <p class="text-center w-responsive mx-auto mb-5">Dans cet espace, vous retrouverez votre éditeur de texte ci dessous ainsi que
                        la liste des chapitres et des commentaires.</p>
                    <div class="card card-list">
                        <div class="card-header white d-flex justify-content-between align-items-center py-3">
                            <p class="h5-responsive font-weight-bold mb-0">Voici votre éditeur de texte</p>
                        </div>
                        <form action="post&status=new" method="post" class="card-body">
                            <input type="text" id="exampleForm2" name="chap_title" placeholder="Titre de ton chapitre" class="form-control rounded-0 mb-3">
                            <textarea name="chap_content" id="montexte" placeholder="A toi de jouer..."></textarea>
                            <div class="card-footer white py-3">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info btn-md px-3 my-0 mr-0">
                                        Editez votre oeuvre<i class="fas fa-book-open pl-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <a class="nav-link" href="index.php?tablePost">
                    Voir tableau des chapitres</a>
                <a class="nav-link" href="index.php?tableComment">Voir tableau des commentaires</a>
</div>
</div>