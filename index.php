
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

<body>
	<div class="container" style="margin-top:40px" enctype="multipart/form-data">
		<form method="POST" action="add.php">
		<center><h1 style="font-style:italic;">เพิ่มหนังสือ</h1></center>
		<input type="text" class="form-control my-3" name="book_name" placeholder="ชื่อหนังสือ">
		<input type="text" class="form-control my-3" name="author" placeholder="ผู้แต่งหนังสือ">
		<input type="text" class="form-control my-3" name="pub_date" placeholder="วันที่ตีพิมพ์ เช่น 22/06/2024">
		<input type="text" class="form-control my-3" name="edition" placeholder="ครั้งที่ตีพิมพ์">
		<input type="text" class="form-control my-3" name="page" placeholder="จำนวนหน้า">
		<input type="file" name="image" /><br><br>
		<button type="submit" id="submit" class="btn btn-outline-blue" name="submit">ยืนยันข้อมูล</button>
		
	
	



