<link rel="stylesheet" href="css/search.css">
<?php
include("h.php");
include("condb.php");
?>

<?php
$name = $_POST["search_name"]; // สม

$sql = "SELECT * FROM tbl_product WHERE p_name LIKE '%$name%' ORDER BY p_name ASC";
$result1=mysqli_query($con,$sql);
$row=mysqli_num_rows($result1);
$order=1;
?>

<form action="search_data.php" method="POST">
<div class="input-group col-md-5">
    <input id="search" type="text" class="form-control" placeholder="ค้นหาสินค้า" name="search_name">
    <button class="btn" type="submit" value="search"><i class="fas fa-search"></i></button>
</div>
</form>