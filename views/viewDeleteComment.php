<?php $this->title = "supprimer commentaire"; ?>


<div class="deleteform">
    <!--Section: Content-->
    <section class="p-5 my-md-5 text-center" style="background-image: url(public/image/hommesalaska.jpg); background-size: cover; background-position: center center;">

        <form class="my-5 mx-md-5" action="post&answer&id=supcom" method="post">

            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Material form login -->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">


                            <!-- Form -->


                            <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Etes-vous certain de vouloir supprimer le commentaire ?</h3>

                            <div class="text-center">
                                <label for="commentaire">N° du commentaire : </label>
                                <input type="text" name="id" value="<?= $comment['id'] ?>"  />
                                <input type="submit" value="Oui certain" class=" btn btn-outline-red btn-rounded my-4 waves-effect" />
                                <a href="index.php?tableComment" class="btn btn-outline-green btn-rounded my-4 waves-effect">Retour</a>
                            </div>


                        </div>
                        <!-- Material form login -->
                    </div>
                </div>

        </form>

    </section>
    <!--Section: Content-->


</div>