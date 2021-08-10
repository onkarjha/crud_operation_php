
<?php
if($_POST['click']=='upload'){
	$conn=new mysqli("localhost","root","","crud");
	$n=$conn->real_escape_string($_POST['n']);
	$e=$conn->real_escape_string($_POST['e']);
	$p=$conn->real_escape_string($_POST['p']);
	$a=$conn->real_escape_string($_POST['a']);
	$sql="INSERT INTO data(name, phone, email, age) VALUES ('$n','$p','$e','$a')";
	$q=$conn->query($sql);
	if($q){
		echo 1;
	}else{
		echo 0;
	}
}
if($_POST['click']=='delete'){
	$conn=new mysqli("localhost","root","","crud");
	$n=$conn->real_escape_string($_POST['id']);

	$sql="delete from data where id='$n'";
	$q=$conn->query($sql);
	if($q){
		echo 1;
	}else{
		echo 0;
	}
}
if($_POST['click']=='update'){
	$conn=new mysqli("localhost","root","","crud");
	$id=$conn->real_escape_string($_POST['id']);
	$n=$conn->real_escape_string($_POST['n']);
	$e=$conn->real_escape_string($_POST['e']);
	$p=$conn->real_escape_string($_POST['p']);
	$a=$conn->real_escape_string($_POST['a']);
	$sql="UPDATE data SET name='$n',phone='$p',email='$e',age='$a' WHERE id='$id'";
	$q=$conn->query($sql);
	if($q){
		echo 1;
	}else{
		echo $conn->error;
	}
}

?>