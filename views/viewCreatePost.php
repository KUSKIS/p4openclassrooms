<?php $this->title = "Ecrire"; ?>



<div class="containwritten">
    <p><a class="nav-link" href="index.php">
            <- Retour à l'accueil </a> </p> <div class="container my-5">

                <!-- Section: Block Content -->
                <section>

                    <div class="card card-list">
                        <div class="card-header white d-flex justify-content-between align-items-center py-3">
                            <p class="h5-responsive font-weight-bold mb-0">Bonjour JF<br>Voici votre éditeur de texte</p>
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

</div>
</div>