 
 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../m_img/<?php echo $m_img; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>คุณ <?php echo $m_name; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> ออนไลน์</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
        <li>
        <a href="index.php"><i class="fa fa-home"></i>&nbsp;&nbsp;
          <span> หน้าหลัก</span>
        </a>
      </li>
      
           <li class="active">
        <a href=""><i class="fa fa-cogs"></i> &nbsp;&nbsp;<span>จัดการข้อมูลระบบ</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-down pull-right"></i>
        </span>
      </a>
    </li>

      <li>
        <a href="member.php"><i class="glyphicon glyphicon-record"></i>
          <span> จัดการสมาชิก</span>
        </a>
      </li>
      <li>
        <a href="news.php"><i class="fas fa-rss-square"></i>&nbsp;&nbsp;
          <span> ข่าวสาร/กิจกรรม</span>
        </a>
      </li>
      <li>
        <a href="type.php"><i class="glyphicon glyphicon-record"></i>
          <span> จัดการประเภท </span>
        </a>
      </li>
      <li>
        <a href="bank.php"><i class="fa-solid fa-building-columns"></i>&nbsp;&nbsp;
          <span> จัดการธนาคาร </span>
        </a>
      </li>
      <li>
        <a href="contact.php"><i class="fas fa-address-book"></i>&nbsp;&nbsp;
          <span> ข้อมูลติดต่อ </span>
        </a>
      </li>
      <li>
        <a href="product.php"><i class="glyphicon glyphicon-record"></i>
          <span> จัดการสินค้า </span>
        </a>
      </li>
      <li>
        <a href="re_product.php"><i class="fas fa-bolt"></i>&nbsp;&nbsp;
          <span> สินค้าแนะนำ </span>
        </a>
      </li>
        <li>
        <a href="member_profile.php"><i class="glyphicon glyphicon-record"></i>
          <span> แก้ไขข้อมูลส่วนตัว </span>
        </a>
      </li>
           <li class="active">
        <a href=""><i class="fa fa-cogs"></i>&nbsp;&nbsp; <span>จัดการข้อมูลรายงาน</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-down pull-right"></i>
        </span>
      </a>
        

      
      <li>
        <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');"><i class="glyphicon glyphicon-off"></i>
          <span> ออกจากระบบ</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>