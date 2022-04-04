<?php 
  if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=contact.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=contact.php" />';

  }else if(@$_GET['do']=='wrong'){
    echo '<script type="text/javascript">
          swal("", "รหัสผ่านใหม่ไม่ตรงกัน !!", "warning");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=contact.php" />';

  }else if(@$_GET['do']=='error'){
    echo '<script type="text/javascript">
          swal("", "ผิดพลาด !!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=contact.php" />';
  }

$query = "
SELECT * FROM tbl_contact 
ORDER BY c_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo '<table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='5%'>ID</th>
      <th width='7%' class='hidden-xs'>รูป</th>
      <th width='20%'>ชื่อ/เบอร์โทรติดต่อ</th>
      <th width='30%'>ที่อยู่/Email</th> 
      <th width='7%'></th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
    //$st = $row["m_level"];
    echo "<tr>";
    echo "<td>" .$row["c_id"] .  "</td> ";
    echo "<td class='hidden-xs'>"."<img src='../m_img/".$row['m_img']."' width='120px'>"."</td>";
    //echo "<td class='hidden-xs'> username: ".$row["m_user"]
    // ."<br>"." password: ".sha1($row['a_password'])  
    "<br>"."<a href='resetpass_admin.php?c_id=".$row['c_id']."'><span class='label label-warning'>(เปลี่ยนรหัสผ่าน)</span></a></td> ";
    echo "<td> ชื่อ ".$row["m_name"]
    ."<br> เบอร์โทร ".$row["m_tel"]
    ."</td> ";
    echo "<td>" .$row["m_address"] ."<br>mail.".$row["m_email"].  "</td> ";
       echo "<td class='hidden-xs' align='center'>";
        //if ($st == 'admin') {
          //echo "ผู้ดูแลระบบ"."<br> <span class='label label-success'>(Admin)</span>";
        //}elseif($st == 'member') {
          //echo "สมาชิก"."<br> <span class='label label-info'>(Member)</span>";
        //}
        echo "</td> ";
    echo "<td><a href='contact.php?act=edit&ID=$row[c_id]' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span></a>
          <a href='contact_del_db.php?ID=$row[c_id]' onclick=\"return confirm('ยันยันการลบ')\" class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></a>
    </td> ";
   
  } 
echo "</table>";
mysqli_close($con);
