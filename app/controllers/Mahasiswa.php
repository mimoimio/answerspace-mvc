<?php
class Mahasiswa extends Controller
{
    public function index($name = "Mior")
    {
        $data["name"] = $name;
        $data["title"] = "Daftar Mahasiswa";
        $data["mhs"] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    public function detail($mahasiswa_id)
    {
        $data["title"] = "Detail Mahasiswa";
        $data["mhs"] = $this->model('Mahasiswa_model')->getMahasiswaById($mahasiswa_id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash("Successfully", "added", "success");
            header('Location: ' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlash("Failed", "added", "danger");
            header('Location: ' . BASEURL . '/mahasiswa');
        }
    }
    public function delete($mahasiswa_id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($mahasiswa_id) > 0) {
            Flasher::setFlash("Successfully", "deleted", "success");
            header('Location: ' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlash("Failed to", "deleted", "danger");
            header('Location: ' . BASEURL . '/mahasiswa');
        }
    }
}
