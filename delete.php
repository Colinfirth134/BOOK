<?php 

$book_id = $_GET['book_id'];

include ('config.php');

mysqli_query($con, "DELETE FROM book WHERE book_id = $book_id");

echo "<script language='javascript'>";
echo 'location="book_info.php"';
echo "</script>";

 ?>