<div class="container">
    <h1 class="display-3 mt-4">Your Profile</h1>
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <h1 class="card-title display-1"><?= $data["user"]["username"] ?></h1>
                    <h6 class="card-subtitle mb-2 text-muted">Joined <?= $data["user"]["time_created"] ?></h6>
                </div>
            </div>
        </div>
    </div>
    <h1 class="display-6 mt-4">Your Answers</h1>
    <div class="row mt-4">
        <?php foreach ($data["answers"] as $answer) : ?>
            <div class="col-4 mb-4">
                <a href="/answer/<?= $answer['answer_id'] ?>" class="text-decoration-none">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title text-truncate"><?= $answer["answer_text"] ?></h5>
                                <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;"><?= $answer["answer_text"] ?></p>
                                <h6 class="card-subtitle mb-2 text-muted"> <?= $answer["time_created"] ?></h6>
                            </div>
                        </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

</div>