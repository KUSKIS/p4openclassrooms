<?php $this->title = "supprimer chapitre"; ?>

<div class="containwritten">
    <div class="container my-5 px-0 z-depth-1">
        <section class="p-5 my-md-5 text-center" style="background-image: url(public/image/route.jpg); background-size: cover; background-position: center center;">
            <form class="my-5 mx-md-5" action="post&response&id=delete" method="post">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Etes-vous certain de vouloir supprimer le chapitre <br>"<?= $chapter['chap_title'] ?>" ?</h3>
                                <div class="text-center">
                                    <input type="hidden" name="id" value="<?= $chapter['id'] ?>" />
                                    <input type="submit" value="oui" class=" btn btn-outline-red btn-rounded my-4 waves-effect" />
                                    <a href="index.php?tablePost" class="btn btn-outline-green btn-rounded my-4 waves-effect">non</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>