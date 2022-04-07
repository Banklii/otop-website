<link rel="stylesheet" href="../css/news.css">
<?php
session_start();
// print_r($_SESSION);
?>
<?php
// include("h.php");
?>

<?php
include("navbar.php");
?>

<?php
require_once('../condb.php');
$query = "SELECT * FROM tbl_news ORDER BY n_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result)) { ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php echo "<img src='../n_img/" . $row['n_img'] . "'width='100%' height='95%'>"; ?>
            </div>
            <div class="col-md-8">
                <h5><?php echo  $row["n_name"]; ?></h5>
                <br>
                <p><?php echo  $row["n_detail"]; ?></p>
                <!-- <br> -->
                <p><?php echo  "วันที่ " . date('d/m/Y', strtotime($row["datesave"])); ?></p><button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;อ่านเพิ่มเติม</button>
            </div>
        </div>
    </div>
<?php
}
?>
<?php
// echo "</table>";
mysqli_close($con);
?>

<br>
<br>

<?php
include("Back_to_top.php");
?>

<?php
include("footer.php");
?>

<script>
// function myFunction() {
//   var dots = document.getElementById("dots");
//   var moreText = document.getElementById("more");
//   var btnText = document.getElementById("myBtn");

//   if (dots.style.display === "none") {
//     dots.style.display = "inline";
//     btnText.innerHTML = "Read more";
//     moreText.style.display = "none";
//   } else {
//     dots.style.display = "none";
//     btnText.innerHTML = "Read less";
//     moreText.style.display = "inline";
//   }
// }
</script>
