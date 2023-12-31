<div class="col-12 col-md-4 col-lg-3">
    <div class="card">
        <img src="<?= $image ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <p class="card-text">
                <?= $content ?>
            </p>
            <div class="">
                <div>
                    <span> vote:
                        <?php echo $custom ?>
                    </span>
                </div>
                <div>
                    genre:
                    <?php echo $genre->name ?>
                </div>
                <div class="d-flex">
                    <span>
                        original language :
                    </span>
                    <div class="icon-flag">

                        <img src="<?php echo "img/flags/$flag_file" ?>" alt="<?php echo "$flag_file flag" ?>">
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>