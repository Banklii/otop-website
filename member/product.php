<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product List</title>

</head>

<body>
<table width="600" border="1" align="center" bordercolor="#666666">
  <tr>
    <td width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพ</strong></td>
    <td width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อหนังสือ</strong></td>
    <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></td>
    <td width="100" align="center" bgcolor="#CCCCCC"><strong>รายละเอียดสินค้า</strong></td>
  </tr>
  
  
  <?php
  //connect db
  // include("connect.php");
  // $sql = "select * from tbl_product order by p_id";  //เรียกข้อมูลมาแสดงทั้งหมด
  // $sql = "SELECT * FROM tbl_product order by p_id";
  // $result = $mysqli_query($con,$sql);
  // $result = mysqli_query($con, $sql);
  // while($row = mysqli_fetch_array($result))

  
// $q = $_GET['q'];
// isset( $_GET['q'] ) ? $q = $_GET['q'] : $q = "";
include("connect.php");
$sql = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type  as t ON p.type_id=t.type_id
ORDER BY p.p_id DESC";  //เรียกข้อมูลมาแสดงทั้งหมด
$result = mysqli_query($conn, $sql);
while ($row_prd = mysqli_fetch_array($result)) 


  {
  	echo "<tr>";
	echo "<td align='center'><img src='img/" . $row_prd["p_img"] ." ' width='80'></td>";
	echo "<td align='left'>" . $row_prd["p_name"] . "</td>";
    echo "<td align='center'>" .number_format($row_prd["p_price"],2). "</td>";
    echo "<td align='center'><a href='product_detail.php?p_id=$row_prd[p_id]'>คลิก</a></td>";
	echo "</tr>";
  }
  ?>
</table>