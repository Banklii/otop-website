<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OTOP ระนอง</title>
<link rel="stylesheet" href="css/index.css">
<?php
include("h.php");
include("condb.php");
?>
<?php
include("navbar.php");
?>
<?php
include("search.php");
?>
<?php
// include("banner.php");
?>
<div class="container">
    <div class="row">
      <div class="col-md-12" style="margin-top: 10px">
        <div class="row">
            <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            $q = $_GET['q'];
            if($act=='showbytype'){
            include('list_prd_by_type.php');
            }else if($q!=''){
            include("show_product_q.php");
            }else if($act=='add'){
            include("member_form_add.php");
            }else{
            include('show_product.php');
            }
            ?>
          </div>
        </div>
      </div>
    </div>
<br>
<?php
include("Back_to_top.php");
?>
<br>
<br>
<?php
include("footer.php");
?>