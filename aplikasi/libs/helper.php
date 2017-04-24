<?php

class Helper
{
    /**
     * debugPDO
     *
     * Menunjukkan query SQL yang ditiru dalam sebuah PDO statement. Apa yang dilakukannya cuma sangat sederhana, namun Manjur :D:
     * Menggabungkan raw query and container. Pasti tidak benar-benar sempurna (seperti PDO lebih kompleks dari sekadar
     * Menggabungkan raw query and argumen), tapi hal itu dapat bekerja
     * 
     * @author Reyy
     * @param string $raw_sql
     * @param array $parameter
     * @return string
     */
    static public function debugPDO($raw_sql, $parameters) {

        $keys = array();
        $values = $parameters;

        foreach ($parameters as $key => $value) {

            // memeriksa apakah parameter bernama ( ': param') atau parameter anonim ( '?') 
            if (is_string($key)) {
                $keys[] = '/' . $key . '/';
            } else {
                $keys[] = '/[?]/';
            }

            // membawa parameter ke dalam format yang dapat dibaca manusia
            if (is_string($value)) {
                $values[$key] = "'" . $value . "'";
            } elseif (is_array($value)) {
                $values[$key] = implode(',', $value);
            } elseif (is_null($value)) {
                $values[$key] = 'NULL';
            }
        }

        /*
        echo "<br> [DEBUG] Keys:<pre>";
        print_r($keys);
        
        echo "\n[DEBUG] Values: ";
        print_r($values);
        echo "</pre>";
        */
        
        $raw_sql = preg_replace($keys, $values, $raw_sql, 1, $count);

        return $raw_sql;
    }

}