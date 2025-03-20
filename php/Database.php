<?php

class Database {
    private PDO $db;
    private static $instance = null;

    private function __construct()
    {
        $this->db = new PDO('sqlite:' . __DIR__ . '/db.sqlite');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->initDatabase();
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->db;
    }

    private function initDatabase()
    {
        $this->db->exec(
            "CREATE TABLE IF NOT EXISTS projects (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                description TEXT NOT NULL,
                image TEXT
            )"
        );
    }
}
