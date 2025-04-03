<div class="col-md-4 mb-4">
    <div class="card h-100">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-start">
                <h5 class="card-title text-truncate mb-3"><?= htmlspecialchars($data["answer_text"]) ?></h5>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary btn-sm " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="/answer/<?= $data['answer_id'] ?>">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/answer/edit/<?= $data['answer_id'] ?>">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/answer/delete/<?= $data['answer_id'] ?>" method="post">
                                <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this answer?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;"><?= htmlspecialchars($data["answer_text"]) ?></p>
            <div class="mt-3">
                <h6 class="card-subtitle text-muted">Posted <?= $data["time_created"] ?></h6>
            </div>
        </div>
    </div>
</div>