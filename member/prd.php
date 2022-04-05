<?php
// include('h.php');
include("../condb.php");
$p_id = $_GET["id"];
?>
<?php
session_start();
// print_r($_SESSION);
?>
<!DOCTYPE html>

<head>

    <link rel="stylesheet" href="../css/prd_member.css">



</head>

<body>
    <?php
    include('navbar.php');
    ?>
    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT * FROM tbl_product as p INNER JOIN tbl_type  as t ON p.type_id=t.type_id AND p_id = $p_id";
            $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
            $row = mysqli_fetch_array($result);

            $sql_last_view = "SELECT p_view FROM tbl_product Where p_id = '" . $p_id . "'";
            $resalt_last_view = mysqli_query($con, $sql_last_view) or die("Error in query: $sql_last_view " . mysqli_error());
            $row_last_view = mysqli_fetch_assoc($resalt_last_view);
            //เรียกดูวิวของสินค้านั้นๆ
            $last_view = $row_last_view['p_view']++;
            $last_view++;
            //นำวิวสินค้าเดิมมา+1
            $update_view = "UPDATE `tbl_product` SET `p_view` = '" . $last_view . "' WHERE `p_id` ='" . $p_id . "'";
            $resalt_updateview = $con->query($update_view);
            //อัพเดทวิวสินค้าใหม่
            ?>
            <div class="col-md-12">
                <div class="container" style="margin-top: 50px">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <div class="zoom"> -->
                            <?php echo "<img src='../p_img/" . $row['p_img'] . "'width='auto' height='500px' id='myImg'>"; ?>
                            <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="col-md-6">
                            <br>
                            <h5><b><?php echo $row["p_name"]; ?></b></h5>
                            <br>
                            <p>
                                ประเภท : <?php echo $row["type_name"]; ?>
                                <br>
                                ราคา : <font color="red"> <?php echo $row["p_price"]; ?> </font> บาท <br>
                                <b>คงเหลือ :</b> <?php echo $row["p_qty"]; ?> <?php echo $row["p_unit"]; ?>
                            </p>
                            <?php echo $row["p_detail"]; ?>
                            <br>
                            <br>
                            จำนวนการเข้าชม <?php echo $row["p_view"]; ?> ครั้ง
                            <p>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5500ee80057fdb99"></script>
                                <!-- <div class="addthis_inline_share_toolbox_sf2w"></div> -->
                            </p>
                            <br>
                            <button id="cart" type="button" class="btn btn-outline-warning"><a href="cart.php?p_id=<?php echo $row["p_id"]; ?>&act=add"><i class="fa-solid fa-cart-plus"></i>&nbsp;&nbsp;เพิ่มลงตะกร้า</a></button>
                            <button id="buy" type="button" class="btn btn-outline-success"><a href="#"><i class="fa-solid fa-check-double"></i>&nbsp;&nbsp;ซื้อสินค้า</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>



    <?php
    include("Back_to_top.php");
    ?>
    <?php
    include("footer.php");
    ?>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>
<?php
// include('show_product.php');
?>