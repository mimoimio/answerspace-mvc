<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>

            <hr>

            <h3 class="display-3 "><?= $data["title"] ?></h3>

            <ul class="list-group mb-4 shadow">
                <?php foreach ($data["mhs"] as $mahasiswa): ?>
                    <li class="list-group-item">
                        <!-- d-flex flex-row justify-content-between -->
                        <div class="d-inline">
                            <span class="text-uppercase"><?= $mahasiswa["name"] ?></span>
                            <span class="font-weight-light text-secondary">[<?= $mahasiswa["nomatric"] ?>]</span>
                        </div>
                        <a class="btn btn-danger float-end ms-2" href="<?= BASEURL ?>/mahasiswa/delete/<?= $mahasiswa["mahasiswa_id"] ?>" class="font-weight-light" onclick="return confirm('Are you sure?')">delete</a>
                        <a class="btn btn-primary float-end ms-2" href="<?= BASEURL ?>/mahasiswa/detail/<?= $mahasiswa["mahasiswa_id"] ?>" class="font-weight-light">detail</a>
                    <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form action="<?= BASEURL ?>/mahasiswa/add" method="post">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ali bin Abu">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="student@gmail.com">
                    </div>

                    <div class="mb-3">
                        <label for="nomatric" class="form-label">nomatric</label>
                        <input type="text" class="form-control" id="nomatric" name="nomatric" placeholder="1212345">
                    </div>

                    <label for="course" class="form-label">Course</label>
                    <select class="form-select" aria-label="Course" id="course" name="course">
                        <!-- <option selected>Course</option> -->
                        <option value="Computer Science">Computer Science</option>
                        <option value="Information Technologies">Information Technologies</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                    </select>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data Mahasiswa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>