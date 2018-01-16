<?php

class Connection
{
    /**
     * Attempt to make and return a db connection
     * @param $config
     * @return PDO
     */
    public static function make($config)
    {
        try {
            return new PDO(
			$config['connection'] . '; dbname=' . $config['name'],
            $config['username'],
                '',
            $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
