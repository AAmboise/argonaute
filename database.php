<?php
    class DataBase {
        private static $pdo;
        public static function getPDO() {
            if (self::$pdo === null) {
                // Récupération des paramètres de configuration BD
                $dsn = "mysql:host=localhost;dbname=argonaute;charset=utf8";
                $login = "root";
                $mdp = "";
                // Création de la connexion
                self::$pdo = new \PDO($dsn, $login, $mdp, 
                        array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
            }
            return self::$pdo;
        }
    }
?>
