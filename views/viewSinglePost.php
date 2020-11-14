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


            </div>

        </section>
        <!-- Section: Block Content -->


    </div>
</div>