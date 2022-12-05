<?php

/**
 * Classe de connection à la base de données
 * PHP version 8.0
 */
class Connection
{
    /**
     * Fonction qui permet de se connecter à la base de données
     * @return PDO
     */
    protected function connect()
    {
        /** Le nom du serveur
         * @var string
         */
        $DB_HOST = "localhost";

        /** Le nom de la base de données
         * @var string
         */
        $DB_NAME = "miniforum";

        /** Le nom d'utilisateur
         * @var string
         */
        $USERNAME = "root";

        /** Le mot de passe
         * @var string
         */
        $PASSWORD = "";

        $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;";

        try {
            $conn = new PDO($dsn, $USERNAME, $PASSWORD);
            return $conn;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            return false;
        }
    }
}
