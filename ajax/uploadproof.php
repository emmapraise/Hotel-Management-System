<?php 
include_once '../db.php';
$name = basename($_FILES['img']['name']);
$tmp = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp, "../uploads/{$name}");
$query = "INSERT INTO proofofpayment_masterfile (reservation_id,path) VALUES({$_POST['code']},'../uploads/{$name}												')";		

	if(mysqli_query($conn,$query)){
		mysqli_query($conn,"UPDATE billing_masterfile SET status = 'Paid' WHERE reservation_id = {$_POST['code']}");
		
	}
?>