<?php

/**
 * The program will create a new save board
 * Jason Ho - 000774370
 * This work is my own and it has not been copied or shared with anyone. 
 */
try {
    $dbh = new PDO("mysql:host=localhost;dbname=000774370", "000774370", "19750719");
} catch (Exception $e) {
    die("ERROR: Sorry couldn't connect. ");
}
?>