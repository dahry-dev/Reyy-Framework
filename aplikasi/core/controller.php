<?php

class Controller
{
    /**
     * @var null koneksi Database
     */
    public $db = null;

    /**
     * @var null Model
     */
    public $model = null;

    /**
     * Setiap kali controller dibuat, membuka koneksi database juga dan memuat "model".
     */
    function __construct()
    {
        $this->openDatabaseConnection();
        $this->loadModel();
    }

    /**
     * Membuka koneksi database dengan mandat dari application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // mengatur (opsional) pilihan koneksi PDO. dalam hal ini, kita mengatur modus pengambilan untuk
        // "Objek", yang berarti semua hasilnya akan objek, seperti ini: $result->nama_user !
        // Misalnya, modus pengambilan FETCH_ASSOC akan menghasilkan seperti ini: $result["nama_user"] !
        // Lihat juga referensi http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // menghasilkan koneksi database, menggunakan konektor PDO
        // Lihat di http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }

    /**
     * Memuat "model".
     * @return model objek
     */
    public function loadModel()
    {
        require APP . 'model/model.php';
        // buat baru "model" (dan lulus koneksi database)
        $this->model = new Model($this->db);
    }
}
