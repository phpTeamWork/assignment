<?php

session_start(); //added by me in order to have a running session in all of the pages

/**
 * @copyright Eran Galperin
 * @license MIT License
 * @see http://www.binpress.com/tutorial/using-php-with-mysql-the-right-way/17
 */
class Db {
    // The database connection
    protected static $connection;
    
    /**
     * Connect to the database
     * 
     * @return bool false on failure / mysqli MySQLi object instance on success
     */
    public function connect() {
        
        // Try and connect to the database
        if(!isset(self::$connection)) {
            // Load configuration as an array. Use the actual location of your configuration file
            // Put the configuration file outside of the document root
            $config = parse_ini_file(__DIR__.'/config.ini'); 
            self::$connection = new mysqli($config['server'],$config['username'],$config['password'],$config['dbname']);
        }
    
        // If connection was not successful, handle the error
        if(self::$connection === false) {
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            return false;
        }
        return self::$connection;
    }
    
    /**
     * Query the database
     *
     * @param $query The query string
     * @return mixed The result of the mysqli::query() function
     */
    public function query($query) {
        // Connect to the database
        $connection = $this -> connect();
        
        // Query the database
        $result = $connection -> query($query);
        
        return $result;
    }
    
    /**
     * Fetch rows from the database (SELECT query)
     *
     * @param $query The query string
     * @return bool False on failure / array Database rows on success
     */
    public function select($query) {
        $rows = array();
        $result = $this -> query($query);
        if($result === false) {
            return false;
        }
        while ($row = $result -> fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    /**
     * Fetch the last error from the database
     * 
     * @return string Database error message
     */
    public function error() {
        $connection = $this -> connect();
        return $connection -> error;
    }
    
    /**
     * Quote and escape value for use in a database query
     *
     * @param string $value The value to be quoted and escaped
     * @return string The quoted and escaped string
     * 
     * This function has been edited by me to further escape the query, and renamed to safe
     */
    public function safe($value) {
        $connection = $this -> connect();
        $value = trim($value);
        //stripslashes(): The stripslashes() function removes backslashes.
        $value = stripslashes($value);
        //htmlspecialchars(): Convert special characters to HTML entities.
        $value = htmlspecialchars($value);
        return "'" . $connection -> real_escape_string($value) . "'";
    }
}