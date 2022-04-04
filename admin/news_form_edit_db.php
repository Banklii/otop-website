<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
if($_SESSION['m_level']!='admin'){
	Header("Location: index.php");
}
	$n_id = mysqli_real_escape_string($con,$_POST["n_id"]);
	$n_name = mysqli_real_escape_string($con,$_POST["n_name"]);
	$n_detail = mysqli_real_escape_string($con,$_POST["n_detail"]);

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$n_img = (isset($_POST['n_img']) ? $_POST['n_img'] : '');
	$upload=$_FILES['n_img']['name'];
	if($upload !='') { 

		$path="../n_img/";
		$type = strrchr($_FILES['n_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../n_img/".$newname;
		move_uploaded_file($_FILES['n_img']['tmp_name'],$path_copy);  
	}else{
		$newname=$n_img2;
	}

	$sql = "UPDATE tbl_news SET 
	n_name='$n_name',
	n_detail='$n_detail',
	n_img='$newname'
	WHERE n_id=$n_id";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "window.location='news.php?do=finish';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='news.php?act=add&do=f';";
    echo '</script>';
}
?>