<div class="row container m-auto mt-4">
    <div class="col-lg-6">
        <a href="/" class="btn btn-outline-secondary">return</a>
    </div>
</div>
<div class="container p-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <h1 class="display-6">Answer Detail</h1>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $data["answer"]["answer_text"] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">By <?= $data["answer"]["username"] ?>, <?= $data["answer"]["time_created"] ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>