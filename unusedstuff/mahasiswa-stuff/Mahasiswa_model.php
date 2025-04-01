<?php
class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db; 
    // database wrapper object
    // private $mhs = [
    //     [
    //         "name" => "Mior",
    //         "nomatric" => "2319909",
    //         "email" => "adib@g.com",
    //         "course" => "Computer Science",
    //     ],
    // ];

    public function __construct(){ 
        $this->db = new Database();
    }

    public function getAllMahasiswa(){
        $this->db->query(('SELECT * FROM '.$this->table));
        return $this->db->resultSet();
    }
    public function getMahasiswaById($mahasiswa_id){
        $this->db->query(('SELECT * FROM '.$this->table.' WHERE mahasiswa_id=:mahasiswa_id'));
        $this->db->bind('mahasiswa_id', $mahasiswa_id);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data) {
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";

        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', :name, :nomatric, :email, :course)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nomatric', $data['nomatric']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('course', $data['course']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($mahasiswa_id){
        $query = "DELETE FROM mahasiswa WHERE mahasiswa_id = :mahasiswa_id";
        $this->db->query($query);
        $this->db->bind('mahasiswa_id', $mahasiswa_id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function editDataMahasiswa($data) {
        $query = "UPDATE mahasiswa SET
                    name = :name,
                    nomatric = :nomatric,
                    email = :email,
                    course = :course
                    WHERE mahasiswa_id = :mahasiswa_id";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nomatric', $data['nomatric']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('course', $data['course']);
        $this->db->bind('mahasiswa_id', $data['mahasiswa_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
