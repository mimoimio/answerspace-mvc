<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="jumbotron mt-4">
        <h1 class="display-1 text-center mb-5">AnswerSpace</h1>
        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p> -->
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($data["answers"] as $answer) : ?>
                <div class="col-md-4  mb-4 ">
                    <a href="<?= BASEURL ?>/answer/index/<?= $answer['answer_id'] ?>" class="text-decoration-none">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title text-truncate"><?= $answer["answer_text"] ?></h5>
                                <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;"><?= $answer["answer_text"] ?></p>
                                <p class="card-text">By <?= $answer["username"] ?></p>
                                <h6 class="card-subtitle mb-2 text-muted"> <?= $answer["time_created"] ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>