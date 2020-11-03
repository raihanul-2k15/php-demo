<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=snippets_share', 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
