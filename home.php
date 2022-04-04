<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OTOP ระนอง</title>
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="css/home.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="logo-banner">
            <img src="img/logo-otop.png">
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary"><i class="fas fa-home"></i>หน้าหลัก</a></li>
            <!-- <li><a href="#" class="nav-link px-2 link-dark"><i class="fas fa-stream"></i>ประเภทสินค้า</a></li> -->
            <li><a href="#" class="nav-link px-2 link-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-stream"></i>ประเภทสินค้า
                    <div class="dropdown-menu">
                        <?php do { ?>
                            <a href="index.php?act=showbytype&type_id=<?php echo $row_typeprd['type_id']; ?>" class="dropdown-item"> <?php echo $row_typeprd['type_name']; ?></a>
                        <?php } while ($row_typeprd = mysqli_fetch_assoc($typeprd)); ?>
                    </div>
            <li><a href="#" class="nav-link px-2 link-dark"><i class="fas fa-rss"></i>ข่าวสาร/กิจกรรม</a></li>
            <li><a href="#" class="nav-link px-2 link-dark"><i class="fas fa-bolt"></i>สินค้าแนะนำ</a></li>
            <li><a href="#" class="nav-link px-2 link-dark"><i class="fas fa-percentage"></i>โปรโมชัน</a></li>
            <li><a href="#" class="nav-link px-2 link-dark"><i class="fas fa-phone-alt"></i>ติดต่อ</a></li>
        </ul>
        <div class="">
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-sign-in-alt"></i>เข้าสู่ระบบ</button>
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
                                        <input type="text" name="m_user" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">ชื่อผู้ใช้</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="m_pass" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">รหัสผ่าน</label>
                                    </div>
                                    <button class="w-100 py-2 mb-2 btn btn-lg btn-outline-warning" type="submit"><i class="fas fa-sign-in-alt"></i>เข้าสู่ระบบ</button><br>
                                    <hr class="my-4">
                                    <h2 class="fs-5 fw-bold mb-3">หรือ</h2>
                                    <!-- <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit"><i class="fas fa-user-plus"></i>สมัครสมาชิก</button> -->
                                    <a class="btn btn-outline-primary" href="member_form_add.php" role="button"><i class="fas fa-user-plus"></i>สมัครสมาชิก</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i>สมัครสมาชิก</button>-->
        <!-- <a  href="register.php"><button type="button" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i>สมัครสมาชิก</button></a> -->
        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
        <a class="btn btn-outline-primary" href="member_form_add.php" role="button"><i class="fas fa-user-plus"></i>สมัครสมาชิก</a>
    </header>
</div>
<div class="input-group">
    <input id="search" type="text" class="form-control" placeholder="ค้นหาสินค้า">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
</div>
<br>
<?php
// include('show_product.php');
?>
<br>
<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#"><i class="fas fa-chevron-circle-up"></i>Back to top</a>
        </p>
    </div>
</footer>
<?php
include("footer.php");
?>

<!-- <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script> -->

