<?php require_once('condb.php');
$query_typeprd = "SELECT * FROM tbl_type ORDER BY type_id ASC";
$typeprd = mysqli_query($con, $query_typeprd) or die("Error in query: $query_typeprd " . mysqli_error());
// echo($query_typeprd);
// exit();
$row_typeprd = mysqli_fetch_assoc($typeprd);
$totalRows_typeprd = mysqli_num_rows($typeprd);
?>
<?php
include('h.php');
?>
<link rel="stylesheet" href="css/index.css">

<nav class="navbar navbar-expand-md navbar-light bg-light" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <div class="logo-banner">
            <img src="img/logo-otop.png">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i>&nbsp;&nbsp;หน้าหลัก</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars-staggered"></i>&nbsp;&nbsp;ประเภทสินค้า</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <!-- <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> -->

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
                    <a class="nav-link"><i class="fas fa-rss"></i>&nbsp;&nbsp;ข่าวสาร/กิจกรรม</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;ติดต่อ</a>
                </li>
            </ul>
            <div class="form-login-regis" name="formlogin" action="checklogin.php" method="POST" id="login">
                <button id="btn-login" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;เข้าสู่ระบบ</button>
                <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ลงชื่อเข้าใช้</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-body p-5 pt-0">
                                    <form class="form-model" action="cheack_login.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="m_user" class="form-control rounded-4" id="floatingInput" placeholder="ชื่อผู้ใช้">
                                            <label for="floatingInput">ชื่อผู้ใช้</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" name="m_pass" class="form-control rounded-4" id="floatingPassword" placeholder="รหัสผ่าน">
                                            <label for="floatingPassword">รหัสผ่าน</label>
                                        </div>
                                        <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                        </label>
                                        <br>
                                        <br>
                                        <button id="btn-login" type="submit" class="btn btn-outline-warning mb-2" type="submit" style="display: block;
    margin-left: auto;
    margin-right: auto; width: 200px;"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;เข้าสู่ระบบ</button>

                                        <!-- <button class="w-100 py-2 mb-2 btn btn-lg btn-outline-warning" type="submit"><i class="fas fa-sign-in-alt"></i>เข้าสู่ระบบ</button><br> -->

                                        <hr class="my-4">
                                        <h5 class="mb-3" style='text-align: center;'>หรือ</h5>

                                        <!-- <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit"><i class="fas fa-user-plus"></i>สมัครสมาชิก</button> -->
                                        <!-- <a class="btn btn-outline-primary" href="member_form_add.php" role="button"><i class="fas fa-user-plus"></i>สมัครสมาชิก</a> -->

                                        <a id="btn-regis" class="btn btn-outline-primary" href="member_form_add.php" role="button" style="display: block;
    margin-left: auto;
    margin-right: auto;  width: 200px;"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;สมัครสมาชิก</a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a id="btn-regis" class="btn btn-outline-primary" href="member_form_add.php" role="button"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;สมัครสมาชิก</a>
            </div>
        </div>
    </div>
</nav>