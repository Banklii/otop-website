<?php 
 if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=news.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=news.php" />';
  }

$query = "SELECT * FROM tbl_news ORDER BY n_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='3%'  class='hidden-xs'>ID</th>
      <th width='8%' class='hidden-xs'>รูป</th>
       <th width='20%'>ชื่อหัวข้อ</th>
       <th width='30%' class='hidden-xs'>รายละเอียด</th>
      <th width='7%'>-</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td  class='hidden-xs'>" .$row["n_id"] .  "</td> ";
    echo "<td class='hidden-xs'>"."<img src='../n_img/".$row['n_img']."' width='150px'>"."</td>";
    echo "<td> ชื่อ: " .$row["n_name"] . "</td class='hidden-xs'> ";
    echo "<td class='hidden-xs'>" .$row["n_detail"] ."</td> ";
      echo "<td> วันที่ ".date('d/m/Y',strtotime($row["datesave"]))."</td> ";
        echo "<td><a href='news.php?act=edit&ID=$row[n_id]' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span></a> 
        <a href='news_del_db.php?ID=$row[n_id]' onclick=\"return confirm('ยันยันการลบ')\" class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></a>        
    </td> ";
    
  }
echo "</table>";
mysqli_close($con);
