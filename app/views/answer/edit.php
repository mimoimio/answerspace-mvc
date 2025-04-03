<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <h1 class="display-3">Edit Answer</h1>

    <div class="row">
        <div class="col-lg-6 border mx-auto">
            <form action="/answer/update/<?= $data['answer']['answer_id'] ?>" method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="answer_text" class="form-label">Your Answer</label>
                    <textarea class="form-control" id="answer_text" name="answer_text" rows="6" required><?= htmlspecialchars($data['answer']['answer_text']) ?></textarea>
                    <div class="invalid-feedback">
                        Please write your answer.
                    </div>
                </div>
                <div class="mb-3">
                    <a href="/profile" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Answer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Bootstrap form validation
    (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
