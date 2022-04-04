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
	$n_name = mysqli_real_escape_string($con,$_POST["n_name"]);
	$n_detail = mysqli_real_escape_string($con,$_POST["n_detail"]);

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$p_img = (isset($_POST['n_img']) ? $_POST['n_img'] : '');
	$upload=$_FILES['n_img']['name'];
	if($upload !='') { 
		$path="../n_img/";
		$type = strrchr($_FILES['n_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../n_img/".$newname;
		move_uploaded_file($_FILES['n_img']['tmp_name'],$path_copy); 
	}

	$sql = "INSERT INTO tbl_news
	(
	n_name,
	n_detail,
	n_img
	)
	VALUES
	(
	'$n_name',
	'$n_detail',
	'$newname'
	)";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($con);

	if($result){
	echo '<script>';
    echo "window.location='news.php?do=success';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='news.php?act=add&do=f';";
    echo '</script>';
}
?>