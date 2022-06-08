<!-- <link rel="stylesheet" href="css/show_product.css"> -->
<link rel="stylesheet" href="../css/search_data.css">
<?php
session_start();
// print_r($_SESSION);
?>

<?php
include("../condb.php");
$p_id = $_GET["id"];
$q = $_GET['q'];
?>

<?php
include("h.php");
include("navbar.php");
include("search.php");
?>

<?php
$search_name = $_GET['search_name'];
// include("condb.php");
$type_id = $_GET['type_id'];
$sql = "SELECT * FROM tbl_product WHERE p_name LIKE '%$search_name%' ORDER BY 'p_id' DESC";  //เรียกข้อมูลมาแสดงทั้งหมด
$result = mysqli_query($con, $sql);
while ($row_prd = mysqli_fetch_array($result)) {
?>
<div class="container">
        <div class="flex-container">
            <div class="card" style="width: 15.5rem;">
                <img class="card-img-top">
                <a href=""> <?php echo "<img src='../p_img/" . $row_prd['p_img'] . "'width='200' height='200'>"; ?></a>
                <div class="card-body">
                    <!-- <a href="prd.php"><b> <?php echo $row_prd["p_name"]; ?></b> </a> -->
                    <a href="prd.php?id=<?php echo $row_prd[0]; ?>"><b> <?php echo $row_prd["p_name"]; ?></b> </a>
                    <br>
                    <br>
                    ราคา <font color=""> <?php echo $row_prd["p_price"]; ?></font> บาท
                    <br>
                    คงเหลือ <?php echo $row_prd["p_qty"]; ?> <?php echo $row_prd["p_unit"]; ?>
                    <br>
                    <br>
                    <button type="button" name="act" value="q" class="btn btn-outline-primary"><a href="prd.php?id=<?php echo $row_prd[0]; ?>"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;รายละเอียด</a></button>
                </div>
            </div>
        </div>
    </div>

<?php } ?>