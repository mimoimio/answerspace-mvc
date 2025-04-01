<div class="container mt-5">
    <a href="<?= BASEURL ?>/mahasiswa" class="card-link">return</a>

    <div class="card m-auto" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Matric No. : <?= $data['mhs']['nomatric'] ?></h6>
            <p class="card-text"><?= $data['mhs']['email'] ?></p>
            <p class="card-text"><?= $data['mhs']['course'] ?></p>
            <!-- <a href="#" class="card-link">Another link</a> -->
        </div>
    </div>

</div>