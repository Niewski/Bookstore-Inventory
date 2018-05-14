<?php
/**
 * Created by PhpStorm.
 * User: jacobwisniewski
 * Date: 4/18/18
 *
 * This file establishes a connection with the database.
 */

$dsn = 'mysql:host=localhost;dbname=BOOK';
$username = 'the_user';
$password = 'pa55word';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
?>