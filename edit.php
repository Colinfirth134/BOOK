<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
	<link	
    rel="icon"
    href="png-transparent-computer-icons-book-book-cover-angle-recycling-logo-thumbnail.png"
    type="image/x-icon"	
    />
</head>
<body>
	<div class="container" style="margin-top:40px;">
		<?php
		if(isset($_POST['submit'])) {
		isset( $_FILES['file']['name'] ) ? $file_name = $_FILES['file']['name'] : $file_name = "";
		$tempname = $_FILES['file']['tmp_name'];
		$folder = 'Images/'.$file_name;
			
		if(move_uploaded_file($tempname, $folder)) {
		echo "<h2>File uploaded successfully</h2>"; 
		} else { 
		echo "<h2>File uploaded failed</h2>";
		}
		$book_name = $_POST['book_name'];
		$author = $_POST['author'];
		$pub_date = $_POST['pub_date'];
		$edition = $_POST['edition'];
		$page = $_POST['page'];
		}
		$book_id = $_GET['book_id'];
		include_once('config.php');		
		if (count($_POST)>0) {
			mysqli_query($con, "UPDATE `book` SET `book_name` = '$book_name', `author` = '$author', `pub_date` = '$pub_date', `edition` = '$edition', `page` = '$page', `file` = '$file_name' WHERE `book_id` = '$book_id'");
		}
		$query = mysqli_query($con, "SELECT * FROM book WHERE book_id = $book_id");
		$data = mysqli_fetch_array($query);	
		?>
		<form method="POST" enctype="multipart/form-data" action="">
			<center><h1 >แก้ไขข้อมูลหนังสือ</h1></center>	
		<input type="text" class="form-control my-3" name="book_id"  value="<?php echo $data['book_id'];?>" disabled></input>
		<input type="text" class="form-control my-3" name="book_name" placeholder="ชื่อหนังสือ" value="<?php echo $data['book_name'];?>">
		<input type="text" class="form-control my-3" name="author" placeholder="ผู้แต่งหนังสือ" value="<?php echo $data['author'];?>">
		<input type="text" class="form-control my-3" name="pub_date" placeholder="วันที่ตีพิมพ์ เช่น 22/06/2024" value="<?php echo $data['pub_date'];?>">
		<input type="text" class="form-control my-3" name="edition" placeholder="ครั้งที่ตีพิมพ์" value="<?php echo $data['edition'];?>">
		<input type="text" class="form-control my-3" name="page" placeholder="จำนวนหน้า" value="<?php echo $data['page'];?>">
		<input type="file" name="file" /><br><br>
		<button type="submit" id="submit" class="btn btn-success" name="submit">ยืนยันข้อมูล</button>
		</form><br>
		<a class="btn btn-danger" href="book_info.php" role ="button">กลับ</a>
	</div>
</body>
</html>


