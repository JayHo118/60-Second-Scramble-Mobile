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
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$userName = $_POST["userName"];
$email = $_POST["email"];

$sql = "INSERT INTO player( firstName, lastName, userName, email ) VALUES ( '$firstName', '$lastName', '$userName', '$email')";
$stmt = $dbh->prepare($sql);
$result = $stmt->execute();

if ($result) {
    $message = "success";
} else {
    $message = "failure";
    echo $sql;
    echo "new id: {$dbh->lastInsertID()}";
}
echo $message;
?>