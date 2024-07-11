<?php 
include('config.php');
isset( $_FILES['file']['name'] ) ? $file_name = $_FILES['file']['name'] : $file_name = "";
$tempname = $_FILES['file']['tmp_name'];
$folder = 'Images/'.$file_name;
        
if(move_uploaded_file($tempname, $folder)) {
    echo "<h2>File uploaded successfully</h2>"; 
} else { 
    echo "<h2>File uploaded failed</h2>";
}

isset( $_POST['author'] ) ? $author = $_POST['author'] : $author = "";
isset( $_POST['pub_date'] ) ? $pub_date = $_POST['pub_date'] : $pub_date = "";
isset( $_POST['edition'] ) ? $edition = $_POST['edition'] : $edition = "";
isset( $_POST['page'] ) ? $page = $_POST['page'] : $page = "";isset( $_POST['book_name'] ) ? $book_name = $_POST['book_name'] : $book_name = "";


mysqli_query($con, "INSERT INTO `book` (`book_id`, `book_name`, `author`, `pub_date`, `edition`, `page`, `file`) VALUES (NULL, '$book_name', '$author', '$pub_date', '$edition', '$page', '$file_name')");

echo "<script language='javascript'>";
echo 'location="book_info.php"';
echo "</script>";

 




 