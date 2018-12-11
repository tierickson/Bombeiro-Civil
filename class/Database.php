<?php
    
    //define('TITLE', 'Sistema de Gerenciamento de Trabalhos Acadêmicos');
    define('SITE_HOME', 'http://localhost:8080');

    define('DB_HOST', 'localhost');
    define('DB_PORT', 3306); // 3306
    define('DB_NAME', 'bombeiro');
    define('DB_USER', 'root');
    define('DB_PWD', '');

class Database {
    
    private static $pdo = null;

    private function __construct() {

    }

    public static function getConnection(){
        if(self::$pdo == null) {
            try {
                self::$pdo = new PDO("mysql:host=".DB_HOST.":".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PWD);
            } catch(PDOException $e) {
                die('Erro ao conectar com o MySQL: ' . $e->getMessage());
            }
            self::$pdo->exec('set names utf8');
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }

}
?>