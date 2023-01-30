<?php
class Database {
    private $host = "localhost";
    private $db_name = "perkuliahan";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

class Jurusan {
    private $conn;
    private $table_name = "jurusan";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}

class MataKuliah {
    private $conn;
    private $table_name = "matkul";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}

class KRS {
    private $conn;
    private $table_name = "krs";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}

class Fakultas {
    private $conn;
    private $table_name = "fakultas";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}

class Mahasiswa {
    private $conn;
    private $table_name = "mahasiswa";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}

class Audit {
    private $conn;
    private $table_name = "auditnilai";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}

$database = new Database();
$db = $database->getConnection();

$jurusan = new Jurusan($db);
$mata_kuliah = new MataKuliah($db);
$krs = new KRS($db);
$fakultas = new Fakultas($db);
$mhs = new Mahasiswa($db);
$audit = new Audit($db);

$stmt = $jurusan->read();
$stmt1 = $mata_kuliah->read();
$stmt11 = $mata_kuliah->read();
$stmt2 = $krs->read();
$stmt3 = $fakultas->read();
$stmt4 = $mhs->read();
$stmt5 = $audit->read();
$num = $stmt->rowCount();
?>