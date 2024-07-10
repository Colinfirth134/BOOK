<?php 
isset( $_POST['book_name'] ) ? $book_name = $_POST['book_name'] : $book_name = "";
isset( $_POST['author'] ) ? $author = $_POST['author'] : $author = "";
isset( $_POST['pub_date'] ) ? $pub_date = $_POST['pub_date'] : $pub_date = "";
isset( $_POST['edition'] ) ? $edition = $_POST['edition'] : $edition = "";
isset( $_POST['page'] ) ? $page = $_POST['page'] : $page = "";


$con = mysqli_connect('localhost','root','','ps');
$con->set_charset('utf8');  




mysqli_query($con, "INSERT INTO `book` (`book_id`, `book_name`, `author`, `pub_date`, `edition`, `page`) VALUES (NULL, '$book_name', '$author', '$pub_date', '$edition', '$page')");


 




 ?>