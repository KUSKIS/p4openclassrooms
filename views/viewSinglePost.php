<?php $this->title = "Chapitre"; ?>

<div class="oneChapter" class="row">
    <div class="col-md-8 col-lg-12 mx-auto">


        <!-- Section: Block Content -->
        <section>

            <div class="card card-list">
                <div class="card-header white d-flex justify-content-between align-items-center py-3">
                    <div class="d-flex justify-content-start align-items-center">
                        <img src="public/image/jeanforteroche.jpg" class="z-depth-1 rounded-circle" width="45" alt="avatar image">
                        <div class="d-flex flex-column pl-3">
                            <a href="Home" class="font-weight-normal mb-0">Jean Forteroche</a>
                            <p class="small text-muted mb-0"><?= $chapter['chap_date_info'] ?></p>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <h2><?= $chapter['chap_title'] ?></h2>

                    <p><?= $chapter['chap_content'] ?></p>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="d-flex flex-row">
                            <button type="button" class="btn btn-fb btn-sm py-1 px-2 m-0 mr-2"><i class="far fa-thumbs-up pr-1"></i>j'aime</button>
                            <a href="post&createComment&id=<?= $chapter['id'] ?>"><button type="button" class="btn btn-info btn-sm py-1 px-2 m-0 mr-2"><i class="far fa-comment pr-1"></i>je commente</button></a>
                        </div>
                        <div class="d-flex flex-column pl-3">
                            <p class="small text-muted mb-0">135 likes - 7 comments</p>
                        </div>
                    </div>
                </div>
                <?php foreach ($comments as $comment) : ?>
                    <div class="py-4 grey lighten-4">
                        <div class="px-3">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(19).jpg" class="z-depth-1 rounded-circle float-left" width="40" alt="avatar image">
                            <div class="d-flex flex-column pl-3">
                                <div class="">
                                    <p class="font-weight-normal mb-0"><?= $comment->com_user() ?></p>
                                    <p class="small text-muted float-right mb-0"><?= $comment->com_date() ?></p>
                                </div>
                                <p class="font-weight-light dark-grey-text mb-0"><?= $comment->com_content() ?></p>
                            </div>
                        </div>
                        <hr class="my-3">
                    </div>
                <?php endforeach; ?>
            </div>
    </div>

    </section>
    <!-- Section: Block Content -->


</div>
</div>
<div class="commentform">
    <p><a class="nav-link" href="index.php">
            <- Retour à l'accueil </a> </p> <section>
                <form action="post&etat&id=newcomment" method="post">
                    <div class="card-footer white py-3">
                        <div class="form-group mb-0">
                            <label for="chapitre">chapitre : </label>
                            <input type="text" name="chapter_id" value="<?= $chapter['id'] ?>" />
                            <label for="user">Pseudo</label>
                            <input type="text" id="user" name="com_user" />
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="2" placeholder="Ecrire un commentaire" name="com_content"></textarea>
                            <div class="text-right pt-1">
                                <input type=submit />
                            </div>
                        </div>
                </form>
                </section>
</div>