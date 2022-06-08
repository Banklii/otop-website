<link rel="stylesheet" href="css/news.css">

<?php
// include("h.php");
?>

<?php
include("navbar.php");
?>

<?php
require_once('condb.php');
$query = "SELECT * FROM tbl_news ORDER BY n_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
// echo ' <table id="example1" class="table table-bordered table-striped">';
// echo "<thead>";
// echo "<tr class=''>
//       <th width='3%'  class='hidden-xs'>ID</th>
//       <th width='8%' class='hidden-xs'>รูป</th>
//        <th width='20%'>ชื่อหัวข้อ</th>
//        <th width='30%' class='hidden-xs'>รายละเอียด</th>
//       <th width='7%'>-</th>
//     </tr>";
// echo "</thead>";
while ($row = mysqli_fetch_array($result)) { ?>
    <!-- // echo "<tr>";
    // echo "<td  class='hidden-xs'>" . $row["n_id"] .  "</td> ";
    // echo "<td class='hidden-xs'>" . "<img src='n_img/" . $row['n_img'] . "' width='150px'>" . "</td>";
    // echo "<td> ชื่อ: " . $row["n_name"] . "</td class='hidden-xs'> ";
    // echo "<td class='hidden-xs'>" . $row["n_detail"] . "</td> ";
    // echo "<td> วันที่ " . date('d/m/Y', strtotime($row["datesave"])) . "</td> ";; -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php echo "<img src='n_img/" . $row['n_img'] . "'width='100%' height='auto'>"; ?>
            </div>
            <div class="col-md-8">
                <h5><?php echo  $row["n_name"]; ?></h5>
                <br>
                <p><?php echo  $row["n_detail"]; ?></p>
                <!-- <br> -->
                <p><?php echo  "วันที่ " . date('d/m/Y', strtotime($row["datesave"])); ?></p>
                <!-- <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;อ่านเพิ่มเติม</button> -->
            </div>
        </div>
    </div>
<?php
}
?>
<?php
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
