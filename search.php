<link rel="stylesheet" href="css/search.css">
<?php
include("h.php");
include("condb.php");
?>

<?php
$search_name = $_GET["search_name"]; // สม

$sql = "SELECT * FROM tbl_product WHERE p_name LIKE '%$name%' ORDER BY p_id DESC";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
$order=1;
?>

<form action="list_prd_by_search.php" method="$_GET">
<div class="input-group col-md-5">
    <input id="search" type="text" class="form-control" placeholder="ค้นหาสินค้า" name="search_name" required>
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    <!-- <button class="btn" type="submit" name="act" value="q"><i class="fas fa-search"></i></button> -->
</div>
</form>