<?php $this->title = "supprimer commentaire"; ?>


<div class="deleteform">
    <!--Section: Content-->
    <section class="p-5 my-md-5 text-center" style="background-image: url(public/image/hommesalaska.jpg); background-size: cover; background-position: center center;">

        <form class="my-5 mx-md-5" action="post&answer&id=sup" method="post">

            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Material form login -->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">


                            <!-- Form -->


                            <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Etes-vous certain de vouloir supprimer le commentaire
                                de <br> "<?= $comment['com_user'] ?>" ?</h3>

                            <div class="text-center">
                                <div class="form-group mb-0">
                                    <input type="hidden" name="id" value="<?= $comment['id'] ?>" />

                                    <button type="submit" class=" btn btn-outline-red btn-rounded my-4 waves-effect">Oui</button>
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