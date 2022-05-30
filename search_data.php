<?php
include("condb.php");
$p_id = $_GET["id"];
?>

<?php
include("navbar.php");
include("search.php");
?>

<link rel="stylesheet" href="css/search_data.css">

<?php
//ค้นหาชื่อในตาราง
$name = $_POST["search_name"]; 
$sql = "SELECT * FROM tbl_product WHERE p_name LIKE '%$name%' ORDER BY p_name ASC";
$result = mysqli_query($con, $sql);
$row = mysqli_num_rows($result);
$order = 1;
?>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <!-- <tr>
        <td><?php
            // echo $order++;
            ?></td>
    </tr> -->

    <div class="container">
        <div class="flex-container">
            <div class="card" style="width: 15.5rem;">
            <img class="card-img-top">
                <a href=""> <?php echo "<img src='p_img/" . $row['p_img'] . "'width='200' height='200'>"; ?></a>
                <div class="card-body">
                    <a href="prd.php?id=<?php echo $row[0]; ?>"><b> <?php echo $row["p_name"]; ?></b> </a>
                    <br>
                    <br>
                    ราคา <font color=""> <?php echo $row["p_price"]; ?></font> บาท
                    <br>
                    คงเหลือ <?php echo $row["p_qty"]; ?> <?php echo $row["p_unit"]; ?>
                    <br>
                    <br>
                    <button type="button" class="btn btn-outline-primary"><a href="prd.php?id=<?php echo $row_prd[0]; ?>"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;รายละเอียด</a></button>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<?php
include("Back_to_top.php");
?>
<br>
<br>
<?php
// include("footer.php");
?>