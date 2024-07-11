<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
	<link	
    rel="icon"
    href="png-transparent-computer-icons-book-book-cover-angle-recycling-logo-thumbnail.png"
    type="image/x-icon"
    />
</head>
<body>
	<div class="container" style="margin-top:40px">
		<center><h1>ข้อมูลหนังสือ</h1></center><br>
		<a class="btn btn-success" href="index.php">เพิ่มหนังสือ</a><br><br>
		<div class="row">	
		<?php 
		include('config.php');
		$query = mysqli_query($con, "SELECT * FROM book");
		

		while ($data = mysqli_fetch_array($query)) {	
			echo '
			<div class="col-md-3">
			<div class="card">
			<div class="card-body">
			<center><img src="Images/'.$data['file'].'" width="227px"/><br><br></center>
			ID : '.$data['book_id'] . '<br>	
			ชื่อหนังสือ : ' .$data['book_name']. ' <br>
			ผู้แต่ง : ' .$data['author']. ' <br>
			วันที่ตีพิมพ์ : ' .$data['pub_date']. ' <br>
			พิมพ์ครั้งที่ : ' .$data['edition']. ' <br>
			จำนวนหน้า : ' .$data['page']. ' <br>
			</div>
			<a class="btn btn-success"  href="edit.php?book_id='.$data['book_id'].'" role ="button">Edit</a>	
			<a class="btn btn-danger" href="delete.php?book_id='.$data['book_id'].'" role ="button">Delete</a>
			
			</div>
			</div> ';
		}
		?>
		 </div>

	</div>
</body>
</html>

