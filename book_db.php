<?php
/**
 * Created by PhpStorm.
 * User: jacobwisniewski
 * Date: 4/18/18
 *
 * Queries the database for the search term, and sets the results to a session array
 */


// Get the product data
$search = $_SESSION['search'];

// Validate inputs
if ($search === Null) {
$error = "Invalid search. Check the searchbox and try again.";
include('database_error.php');
} else {
    require_once('database.php');
}

$_SESSION['booklist'] = array();
$numberofbooks = 0;

// Get books that match search
$queryBooks = 'SELECT bookTitle, bookAuthor, bookEdition, bookISBN, bookCondition, bookDescription, bookPrice FROM books
                      WHERE (bookTitle LIKE :search OR 
                      bookAuthor LIKE :search OR 
                      bookISBN LIKE :search OR 
                      bookDescription LIKE :search OR 
                      bookComments LIKE :search) AND 
                      bookSellable = :sell_key ORDER BY bookTitle';
$statement1 = $db->prepare($queryBooks);
$statement1->bindValue(':search', '%' . $search . '%');
$statement1->bindValue(':sell_key', 1);
$statement1->execute();
$books = $statement1->fetchAll();
foreach($books as $book)
{

    $_SESSION['booklist'][$numberofbooks] = $book;
    $numberofbooks++;
}

$statement1->closeCursor();


unset ($_SESSION['search']);

