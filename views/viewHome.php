<?php $this->title = "Jean Forteroche"; ?>


<div id="headercontainer">

    <div class="view">
        <img class="viewimg" src="public/image/snow4.jpg" class="img-fluid" alt="vue aérienne forêt enneigée">
        <div class="mask pattern-6 flex-center waves-effect waves-light">

            <h1>EN LIBRAIRIE LE 20 AVRIL</h1><br>
            <h2 class="h1-responsive text-center white-text ">Le nouveau roman de Jean Forteroche</h2><br>
            <img class="imgview" src="public/image/mini_cover.jpg" class="img-fluid z-depth-1" alt="novel cover">

        </div>
    </div>

</div>


<!--Section: Content-->
<section class="px-md-5 mx-md-5 text-center text-lg-left">

    <div id="home">

        <div class="col-md-10">
            <div class="card-body m-3">
                <div class="row">
                    <div class="col-lg-4 d-flex mb-2 align-items-center">
                        <div class="avatar mx-4 w-100 white d-flex justify-content-center align-items-center">
                            <img src="public/image/jeanforteroche.jpg" class="img-fluid z-depth-1" alt="photo de Jean Forteroche">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h3><strong>Les mots de l'auteur ...</strong></h3><br>
                        <p class="text-muted font-weight-light mb-4">"Salut à toi mon fidèle lecteur. J'ai pris une grande décision et cela risque de te surprendre mais bon tu me connais maintenant.
                            Pour mon nouveau roman "Billet simple pour l'Alaska", je t'embarque avec moi... Pour cela je met à ta disposition quelques
                            chapitres de mon roman alors n'hésite pas à intéragir!"
                        </p>
                        <p class="font-weight-bold lead mb-2"><strong>Jean Forteroche</strong></p>
                        <p class="font-weight-bolder text-muted mb-0">Romancier</p><br>
                        <i>"Grand voyageur et docteur en ethnologie, Jean Forteroche enseigne à l'université de Montréal. Il est l'auteur de plusieurs récits d'aventures et romans policiers: 30 nuits dans la réserve du Yukon (1992), Rencontre avec les "Tsleil-Waututh" (1993), Un privé sur la route du Klondike (2000), Au temps des Premières Nations (2013), publiés aux Yukon Editions."</i>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <hr><br><br>

        <div class="row">
            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3><strong>"Billet simple pour l'Alaska"</strong></h3><br>
                <h4>La quatrième de couverture</h4><br>
                <p class="text-muted">"- Bonjour Monsieur Visconsi et bienvenue à Fairbanks en Alaska! Avez-vous fait un agréable voyage? Vous avez de la chance!
                    Un aurore boréal vous accueille ce soir d'ailleurs...<br>
                    - Cessez vos discours d'agent de tourisme et amenez moi directement sur les lieux.<br>
                    - Mais Monsieur, la nuit commence à tomber et je pensais vous y emmener...<br>
                    - M'est égal. Savez vous comment je procède agent...?<br>
                    - Agent Nichols, je suis...<br>
                    - Vous êtes trop bavard Agent Nichols! Conduisez moi à Ester Town. Je veux m'imprègner de l'atmosphère. Le crime a
                    bien eu lieu la nuit..."</p><br>
                <a class="btn btn-info btn-md ml-0" href="views/chapters.php" role="button">Accès aux chapitres</a>
            </div>
            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">
                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="public/image/train.jpg" class="img-fluid" alt="train en Alaska">
                    <a href="#">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
            <!--Grid column-->
        </div>

    </div>

</section>

<hr><br>
<div class="titlelist">
    <h3><strong>Liste des 3 derniers chapitres</strong></h3>
</div><br>

<?php foreach ($chapters as $chapter) : ?>




    <div class="container mt-5 py-5 z-depth-1 grey lighten-4">
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4 mb-md-0">

                    <!--Image-->
                    <div class="view overlay z-depth-1-half">
                        <img src="public/image/maisonabandonnee.jpg" class="img-fluid" alt="">

                        <a href="post&id= <?= $chapter->id() ?>">
                            <div class="mask rgba-white-light"></div>
                        </a>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4 mb-md-0 p-2">

                    <h3 class="font-weight-bold"><?= $chapter->chap_title() ?></h3>

                    <p class="text-muted">publié le <?= $chapter->chap_date_info() ?><br>


                        <a class="btn btn-info btn-md ml-0" href="post&id= <?= $chapter->id() ?>" role="button">Lire le chapitre</a>

                </div>

                <!--Grid column-->

            </div>
            <!--Grid row-->



        </section>
        <!--Section: Content-->
    </div>


<?php endforeach; ?>
