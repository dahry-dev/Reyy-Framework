<?php

class Application
{
    /** @var null controller */
    private $url_controller = null;

    /** @var Metode null (dari atas controller), sering juga disebut "action" */
    private $url_action = null;

    /** @var array URL parameter */
    private $url_params = array();

    /**
     * "Start" Aplikasi:
     * Menganalisis unsur-unsur URL dan panggilan controller / metode sesuai atau dari fallback
     */
    public function __construct()
    {
        // membuat array dengan bagian-bagian URL di variabel $url
        $this->splitUrl();

        // cmemeriksa controller: jika tidak mengontrol yang diberikan? maka mengalih ke halaman utama
        if (!$this->url_controller) {

            require APP . 'controller/home.php';
            $page = new Home();
            $page->index();

        } elseif (file_exists(APP . 'controller/' . $this->url_controller . '.php')) {
            // Memeriksa controller, jika tidak bisa mengontrol data tersebut

            // jika demikian, maka memuat file ini dan membuat sebuah controller baru
            // Contoh: jika controller akan "mobil", maka garis ini akan diterjemahkan ke dalam: $this->mobil = new mobil();
            require APP . 'controller/' . $this->url_controller . '.php';
            $this->url_controller = new $this->url_controller();

            // memeriksa metode: jika tidak ada metode seperti itu di controller?
            if (method_exists($this->url_controller, $this->url_action)) {

                if (!empty($this->url_params)) {
                    // Memanggil metode dan lulus argumen
                    call_user_func_array(array($this->url_controller, $this->url_action), $this->url_params);
                } else {
                    // Jika tidak ada parameter yang diberikan, hanya memanggil metode tanpa parameter, seperti $this->home->method();
                    $this->url_controller->{$this->url_action}();
                }

            } else {
                if (strlen($this->url_action) == 0) {
                    // tidak ada tindakan didefinisikan: memanggil indeks default () metode controller yang dipilih
                    $this->url_controller->index();
                }
                else {
                    header('location: ' . URL . 'problem');
                }
            }
        } else {
            header('location: ' . URL . 'problem');
        }
    }

    /**
     * Mendapatkan dan memecah URL
     */
    private function splitUrl()
    {
        if (isset($_GET['url'])) {

            // memecahkan URL
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Memasukan bagian URL ke dalam menurut sifat
            // sintaks di sini hanyalah sebuah bentuk singkat if / else, dan "Ternary Operator"
            // Lihat http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            $this->url_controller = isset($url[0]) ? $url[0] : null;
            $this->url_action = isset($url[1]) ? $url[1] : null;

            // Hapus controller dan tindakan dari perpecahan URL
            unset($url[0], $url[1]);

            // Rebase array key dan menyimpan URL param
            $this->url_params = array_values($url);

            // untuk debugging. hapus tanda komentar ini jika Anda memiliki masalah dengan URL
            //echo 'Controller: ' . $this->url_controller . '<br>';
            //echo 'Action: ' . $this->url_action . '<br>';
            //echo 'Parameters: ' . print_r($this->url_params, true) . '<br>';
        }
    }
}
