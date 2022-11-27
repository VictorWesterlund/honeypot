<?php

    require_once Path::root("database/SQLite/SQLite.php");

    class PotDB extends SQLiteDriver {
        public function __construct() {
            // Check that we have a location to pot our catch
            if (empty($_ENV["DB_POT"])) {
                die("Where do you want it? Set DB_POT to a path on disk where the SQLite database will be created.");
            }

            // Initialize the SQLite interface
            parent::__construct($_ENV["DB_POT"], Path::root("database/init/POT.sql"));
        }

        // Gottem
        public function yoink(): bool {
            // Stringiy all POST and SERVER fields into JSON
            $data = json_encode([
                "POST"   => $_POST,
                "SERVER" => $_SERVER
            ]);

            // And save it!
            $sql = "INSERT OR IGNORE INTO pot (id, data, version, created) VALUES (?, ?, ?, ?)";
            return $this->return_bool($sql, [
                crc32(uniqid($data, true)),
                $data,
                1,
                time()
            ]);
        }
    }