<?php
/**
 * Created by PhpStorm.
 * User: jacobwisniewski
 * Date: 4/18/18
 *
 * This file begins the session and also functions as the main controller for the app.
 */
// check if session exists?
if(!isset($_SESSION)){
    $lifetime = 60 * 60 * 24 * 14; // 2 weeks
    session_set_cookie_params($lifetime, '/');
    session_start();
}

// Get search value
$search = filter_input(INPUT_POST, 'search');
if($search === NULL)
{
    include('search_view.php');
}else{
    $_SESSION['search'] = $search;
    include('book_db.php');
    include('search_view.php');
}


?>

