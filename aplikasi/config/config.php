<?php

/**
 * Konfigurasi
 *
 * Untuk info lebih lanjut tentang konstanta silahkan Lihat ke http://php.net/manual/en/function.define.php
 */

/**
 * Konfigurasi untuk: Error reporting
 * Guna untuk menunjukkan setiap masalah kecil selama pengembangan, tetapi hanya menunjukkan kesalahan besar dalam produksi
 */
define('ENVIRONMENT', 'development');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

/**
 * Konfigurasi untuk: Zona waktu
 * Dengan begitu maka zona waktu kita sekarang telah diubah menjadi waktu Asia/Jakarta. 
 */
date_default_timezone_set('Asia/Jakarta');
/**
 * Konfigurasi Untuk: URL
 * Di sini akan otomatis mendeteksi URL aplikasi Anda dan potensi sub-folder. Bekerja sempurna pada banyaknya server dari di lokal
 * lingkungan pengembangan (seperti WAMP, MAMP, dll). Jangan sentuh ini kecuali Anda tahu apa yang Anda lakukan.
 *
 * URL_PUBLIC_FOLDER:
 * Folder yang terlihat untuk umum, pengguna hanya akan memiliki akses ke folder itu sehingga tak seorang pun bisa melihat-lihat ke dalam Path
 * "/application" atau folder lain dalam aplikasi Anda untuk memanggil file php selain index.php di dalam "/public".
 *
 * URL_PROTOCOL:
 * Protokol. Jangan dirubah kecuali Anda tahu persis apa yang Anda lakukan. Ini mendefinisikan bagian protokol URL, di path
 * protocol-independent '//' digunakan, yang otomatis diakui protokol.
 *
 * URL_DOMAIN:
 * Domain. Jangan dirubah kecuali Anda tahu persis apa yang Anda lakukan.
 *
 * URL_SUB_FOLDER:
 * Sub-folder. Biarkan seperti itu, bahkan jika Anda tidak menggunakan sub-folder (maka ini akan menjadi "/").
 *
 * URL:
 * Final, auto-terdeteksi URL (membangun melalui segmen atas). Jika Anda tidak ingin menggunakan auto-deteksi,
 * lalu ganti baris ini dengan URL lengkap (dan sub-folder) dan garis miring.
 */

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

/**
 * Konfigurasi untuk: Database
 * Ini adalah tempat di mana Anda mendefinisikan identitas database Anda, tipe database dll
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'mysql.idhostinger.com');
define('DB_NAME', 'u540575856_dahri');
define('DB_USER', 'u540575856_dahri');
define('DB_PASS', 'ayon23');
define('DB_CHARSET', 'utf8');