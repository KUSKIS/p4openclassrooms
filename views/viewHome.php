<?php $this->title = "Jean Forteroche"; ?>

<div id="headercontainer">
    <div class="view">
        <img class="viewimg" src="public/image/snow4.jpg" class="img-fluid" alt="vue aérienne forêt enneigée">
        <div class="mask pattern-6 flex-center waves-effect waves-light">
            <div class="headertitle1">
                <h1>EN LIBRAIRIE LE 20 AVRIL</h1><br>
            </div>
            <div class="headertitle2">
                <h2 class="h1-responsive text-center white-text">Le nouveau roman de Jean Forteroche</h2><br>
            </div>
            <img class="imgview" src="public/image/mini_cover.jpg" class="img-fluid z-depth-1" alt="couverture livre">
        </div>
    </div>
</div>
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
    </div>
    <br>
    <hr><br>
    <div class="col-md-15">
        <div class="card-body m-3">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3><strong>Billet simple pour l'Alaska</strong></h3><br>
                    <h4>La quatrième de couverture</h4><br>
                    <p class="text-muted">- Bonjour Monsieur Visconsi et bienvenue à Fairbanks en Alaska ! Avez-vous fait un agréable voyage ? Vous avez de la chance !
                        Un aurore boréal vous accueille ce soir d'ailleurs...<br>
                        - Cessez vos discours d'agent de tourisme et amenez moi directement sur les lieux.<br>
                        - Mais Monsieur, la nuit commence à tomber et je pensais vous y emmener...<br>
                        - M'est égal. Savez vous comment je procède agent...?<br>
                        - Agent Nichols, je suis...<br>
                        - Vous êtes trop bavard Agent Nichols ! Conduisez moi à Ester Town. Je veux m'imprègner de l'atmosphère. Le crime a
                        bien eu lieu la nuit...</p><br>
                    <div id="accordion">
                        <button class="btn btn-info animated swing infinite" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Les chapitres
                        </button>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="view overlay z-depth-1-half">
                        <img src="public/image/train.jpg" class="img-fluid" alt="train en Alaska">
                        <a href="#">
                            <div class="mask rgba-white-light"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr><br>



<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
    <div class="container my-5">

        <section class="dark-grey-text text-center">
            <h3 class="text-center font-weight-bold mb-4 pb-2"><strong>Les derniers chapitres publiés</strong></h3>
            <p class="text-center text-muted w-responsive mx-auto mb-5">En vous souhaitant bonne lecture à toutes et à tous...</p>
            <?php foreach ($chapters as $chapter) : ?>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card card-image" style="background-image: url(public/image/alaskaview.jpg); background-size: cover; background-position: center center;">
                            <div class="text-white text-center d-flex align-items-center rgba-black-light py-5 px-4 px-md-5 rounded">
                                <div>
                                    <h3 class="py-3 font-weight-bold">
                                        <?= $chapter->chap_title() ?></h3>
                                    <p class="pb-3">
                                        <?= substr($chapter->chap_content(), 0, 300) ?>
                                    </p>
                                    <p><small><?= $chapter->chap_date_info() ?></small></p>
                                    <a class="btn btn-info btn-rounded btn-md" href="post&id=<?= $chapter->id() ?>"><i class="fas fa-clone left"></i> Lire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

    </div>
</div>