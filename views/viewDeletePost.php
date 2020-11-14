<?php $this->title = "supprimer chapitre"; ?>


<div class="deleteform">
    <!--Section: Content-->
    <section class="p-5 my-md-5 text-center" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">

        <form class="my-5 mx-md-5" action="post&response=delete" method="post">

            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Material form login -->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">


                            <!-- Form -->


                            <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Etes-vous certain de vouloir supprimer le chapitre</h3>

                            <div class="text-center">
                                <input type="text" name="id" />

                                <!--<input type="hidden" name="id" value="" />-->

                                <input type="submit" value="delete" class=" btn btn-outline-red btn-rounded my-4 waves-effect" />
                                <a href="index.php?tablePost" class="btn btn-outline-green btn-rounded my-4 waves-effect">Retour</a><!-- Form -->

                            </div>


                        </div>
                        <!-- Material form login -->
                    </div>
                </div>

        </form>

    </section>
    <!--Section: Content-->


</div>