<?php
/**
 * Created by PhpStorm.
 * User: jacobwisniewski
 * Date: 4/18/18
 *
 * The main view for the bookstore application.
 */
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Bookstore</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<main>
    <div id="header">
        <img src="logo.jpg">
        <p>5673 E. 16th St.</p>
        <p>Kentwood, MI 49512</p>
        <p>(616)754-0093</p>
    </div>

    <div id="search-container">
        <form action="." method="post" id="searchForm">
            <input type="text" placeholder="Search by Title, Author, Keyword, or ISBN" name="search">
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php if (isset($_SESSION['booklist'])) { ?>
    <!-- display a list of books -->
    <nav>
    <?php
    $results = $_SESSION['booklist'];
    foreach ($results as $result)
    {
        echo '<li>' . $result['bookTitle'] . ', '
            . $result['bookAuthor'] . ', '
            . $result['bookEdition'] . ', '
            . $result['bookISBN'] . ', '
            . $result['bookCondition'] . ', '
            . $result['bookDescription'] . ', '
            . $result['bookPrice'];
    }
    ?>
    </nav>

    <?php } ?>
</main>
<footer></footer>
</body>
</html>