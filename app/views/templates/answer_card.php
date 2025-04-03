<div class="col-md-4 mb-4">
    <a href="/answer/<?= $data['answer_id'] ?>" class="text-decoration-none">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-truncate"><?= htmlspecialchars($data["answer_text"]) ?></h5>
                <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;"><?= /*htmlspecialchars($data["answer_text"])*/ "" ?></p>
                <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;"><?= htmlspecialchars($data["answer_text"]) ?></p>
                <p class="card-text">By <?= htmlspecialchars($data["username"]) ?></p>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data["time_created"] ?></h6>
            </div>
        </div>
    </a>
</div>