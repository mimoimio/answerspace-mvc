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
            <?= $this->rayafication($this->component('answer_card', $answer)); ?>
        <?php endforeach; ?>
    </div>

</div>