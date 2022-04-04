<link rel="stylesheet" href="css/member_form_add.css">
<?php
include("h.php");
?>

<div class="container">
    <h2>สมัครสมาชิก</h2>
    <!-- <hr> -->
    <br>
    <form class="row g-3" name="register" action="member_form_add_db.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="validationDefault01" class="form-label">ชื่อผู้ใช้</label>
            <input type="text" name="m_user" class="form-control" id="validationDefault01" required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault02" class="form-label">รหัสผ่าน</label>
            <input type="password" name="m_pass" class="form-control" id="m_pass" required>
        </div>
        <div class="col-md-5">
            <label for="validationDefault03" class="form-label">ชื่อ - นามสกุล</label>
            <input type="text" name="m_name" class="form-control" id="m_name" required>
        </div>
        <div class="col-md-7">
            <label for="validationDefault04" class="form-label">ที่อยู่</label>
            <input type="text" name="m_address" class="form-control" id="m_address" required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault05" class="form-label">E-mail</label>
            <input type="email" name="m_email" class="form-control" id="m_email" required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault06" class="form-label">เบอร์โทรศัพท์</label>
            <input type="text" name="m_tel" class="form-control" id="m_tel" required>
        </div>
        <div class="col-md-8">
            <label for="validationDefault07" class="form-label">รูปภาพ</label>
            <input type="file" name="m_img" class="form-control" id="card_img" required>
        </div>
        <!-- <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div> -->
        <br>
        <div class="form-group">
            <!-- <div class="col-sm-2"> </div> -->
            <div class="col-md-12" align="center">
                <button type="submit" class="btn btn-success" id="btn"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;สมัครสมาชิก
                </button> <a href="index.php" type="button" class="btn btn-danger" id="btn"><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp;ยกเลิก </a>
            </div>

        </div>
    </form>
    <!-- <br>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a><button class="btn btn-success" type="button"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;สมัครสมาชิก</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="index.php" type="button"><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp;ยกเลิก</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
</div>