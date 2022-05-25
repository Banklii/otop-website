<?php
// session_start();
?>
<?php require_once('../condb.php');
$query_typeprd = "SELECT * FROM tbl_type ORDER BY type_id ASC";
$typeprd = mysqli_query($con, $query_typeprd) or die("Error in query: $query_typeprd " . mysqli_error());
// echo($query_typeprd);
// exit();
$row_typeprd = mysqli_fetch_assoc($typeprd);
$totalRows_typeprd = mysqli_num_rows($typeprd);
?>

<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/navbar_member.css">

<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- JavaScript Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<?php
// $sql = "SELECT * FROM tbl_product. * , COUNT(p.p_id) AS ptotal
// where tbl_product LEFT JOIN p ON tbl_product.tbl_product_id1=p.tbl_product_id GROUP BY tbl_product.tbl_product_id1";
// $query = mysqli_query($con, $sql);
// // $row = mysqli_fetch_array($query);
// $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());

// $sql = "SELECT count(p_id) AS total1
// FROM tbl_product";
// $result = mysqli_query($con, $sql);
// $row = mysqli_num_rows($result);
// $row = mysqli_fetch_array($result);
// echo $row['total'];

// count($_SESSION["strProductID"]);

// $sql = "SELECT COUNT(p_name) AS total1 FROM $_SESSION[cart]";
// $result = mysqli_query($con, $sql);
// $row = mysqli_num_rows($result);
// $row = mysqli_fetch_array($result);

// isset( $_GET['p_id'] ) ? $p_id = $_GET['p_id'] : $p_id = "";
// 	isset( $_GET['act'] ) ? $act = $_GET['act'] : $act = "";
// 	if($act=='add' && !empty($p_id))
// 	{
// 		if(isset($_SESSION['cart'][$p_id]))
// 		{
// 			$_SESSION['cart'][$p_id]++;
// 		}
// 		else
// 		{
// 			$_SESSION['cart'][$p_id]=1;
// 		}
// 	}

// 	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
// 	{
// 		unset($_SESSION['cart'][$p_id]);
// 	}

// 	if($act=='update')
// 	{
// 		$amount_array = $_POST['amount'];
// 		foreach($amount_array as $p_id=>$amount)
// 		{
// 			$_SESSION['cart'][$p_id]=$amount;
// 		}
// 	}

?>

<nav class="navbar navbar-expand-md navbar-light bg-light" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <div class="logo-banner">
            <img src="../img/logo-otop.png">
            <p> ยินดีต้อนรับคุณ : <?php echo $_SESSION["m_name"]; ?> </p>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;หน้าหลัก</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars-staggered"></i>&nbsp;&nbsp;ประเภทสินค้า</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <?php do { ?>
                            <li><a class="dropdown-item" href="index.php?act=showbytype&type_id=<?php echo $row_typeprd['type_id']; ?>" class="dropdown-item"> <?php echo $row_typeprd['type_name']; ?></a></li>
                        <?php } while ($row_typeprd = mysqli_fetch_assoc($typeprd)); ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-bolt"></i>&nbsp;&nbsp;สินค้าแนะนำ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa-solid fa-percent"></i>&nbsp;&nbsp;โปรโมชัน</a>
                </li>
                <li class="nav-item">
                    <a href="news.php" class="nav-link"><i class="fas fa-rss"></i>&nbsp;&nbsp;ข่าวสาร/กิจกรรม</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;ติดต่อ</a>
                </li>
            </ul>
            <!-- <a><i class="fa-solid fa-cart-arrow-down"></i></a> -->
            <!-- <a href="cart.php" id="cart"><i class="fa-solid fa-cart-arrow-down"></i></a>&nbsp;&nbsp;&nbsp;&nbsp; -->
        
            <button type="button" class="btn btn-info position-relative">
                <a href="cart.php">
                    <!-- Inbox -->
                    <i class="fa-solid fa-cart-arrow-down" style="color:#fff; font-size:20px;"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <!-- นับจำนวนสินค้าในตะกร้าสินค้าเป็น session -->
                        <?php
                        // echo count($_SESSION['cart']);
                        $count = ($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
                        echo $count;
                        ?>
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </a>
            </button>&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" id="logout" class="btn btn-outline-danger"><a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');"><i class="fa-solid fa-power-off"></i>&nbsp;&nbsp;ออกจากระบบ</a></button>
        </div>

</nav>