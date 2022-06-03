<?php
session_start();
// $p_id = $_GET['p_id']; 
// $act = $_GET['act'];
isset($_GET['p_id']) ? $p_id = $_GET['p_id'] : $p_id = "";
isset($_GET['act']) ? $act = $_GET['act'] : $act = "";
if ($act == 'add' && !empty($p_id)) {
	if (isset($_SESSION['cart'][$p_id])) {
		$_SESSION['cart'][$p_id]++;
	} else {
		$_SESSION['cart'][$p_id] = 1;
	}
}
if ($act == 'remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
{
	unset($_SESSION['cart'][$p_id]);
}
if ($act == 'update') {
	$amount_array = $_POST['amount'];
	foreach ($amount_array as $p_id => $amount) {
		$_SESSION['cart'][$p_id] = $amount;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Shopping Cart</title>
</head>
<?php
include("h.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- <p> ยินดีต้อนรับคุณ : <?php echo $_SESSION["m_name"]; ?> </p> -->
<?php
include("navbar.php");
?>
<br>
<br>
<br>
<link rel="stylesheet" href="../css/cart.css">

<body>
	<form id="frmcart" name="frmcart" method="post" action="?act=update">
		<table border="0" align="center" class="center">
			<tr>
				<td colspan="7" bgcolor="#CEE7FF">
					<b>ตะกร้าสินค้า</span>
				</td>
			</tr>
			<tr>
				<th width='57'>เลือก</th>
				<th width='300'>รูปภาพ</th>
				<th width='334'>ชื่อสินค้า</th>
				<th width='100'>ราคา</th>
				<th width='70'>จำนวน</th>
				<th width='100'>รวม(บาท)</th>
				<th width='75'>ลบ</th>
			</tr>
			<?php
			$total = 0;
			if (!empty($_SESSION['cart'])) {
				include("../condb.php");
				foreach ($_SESSION['cart'] as $p_id => $qty) {
					$sql = "SELECT * FROM tbl_product where p_id=$p_id";
					$query = mysqli_query($con, $sql);
					$row = mysqli_fetch_array($query);
					$sum = $row['p_price'] * $qty;
					$total += $sum;
					echo "<tr>"; ?>
					<td width='57'>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
							<label class="form-check-label" for="flexCheckChecked">

							</label>
						</div>
					</td>
					<?php
					echo "<td width='300'>" . "<img src='../p_img/" . $row['p_img'] . "'width='auto' height='120px' id='myImg'>" . "</td>";
					echo "<td width='334'>" . $row["p_name"] . "</td>";
					echo "<td width='100' align='right'>" . number_format($row["p_price"], 2) . "</td>";
					echo "<td width='70' align='right'>";
					echo "<input type='text' name='amount[$p_id]' value='$qty' size='2'/></td>";
					echo "<td width='100' align='right'>" . number_format($sum, 2) . "</td>";
					//remove product
					echo "<td width='75' align='center'><a href='cart.php?p_id=$p_id&act=remove'>ลบ</a></td>";
					?>
			<?php
					echo "</tr>";
				}
				echo "<tr>";
				echo "<td colspan='5' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
				echo "<td align='right' bgcolor='#CEE7FF'>" . "<b>" . number_format($total, 2) . "</b>" . "</td>";
				echo "<td align='left' bgcolor='#CEE7FF'></td>";
				echo "</tr>";
			}
			?>
			<tr>
			<br>
				<td colspan="5" class="btn-home"><a href="index.php">กลับหน้ารายการสินค้า</a></td>
				<td colspan="1" align="right">
					<input type="submit" name="button" id="button" value="ปรับปรุง" />
					<!-- <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" /> -->
				</td>
				<td colspan="1" align="right">
					<!-- <input type="submit" name="button" id="button" value="ปรับปรุง" /> -->
					<input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
				</td>
			</tr>
		</table>


		<!-- <button type="button" class="btn btn-outline-info"><a href="index.php">กลับหน้ารายการสินค้า</a></button> -->

	</form>
	<!-- <br>
	<tr>
		<td colspan="5"><a href="index.php">กลับหน้ารายการสินค้า</a></td>
		<td colspan="2" align="right">
			<input type="submit" name="button" id="button" value="ปรับปรุง" />
			<input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
		</td>
	</tr> -->


	<!-- <table class="center">
			<tr>
				<th>เลือก</th>
				<th>รูปภาพ</th>
				<th>ชื่อสินค้า</th>
				<th>ราคา</th>
				<th>จำนวน</th>
				<th>รวม(บาท)</th>
				<th>ลบ</th>
			</tr>
			<tr>
				<td width='57'>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
						<label class="form-check-label" for="flexCheckChecked">

						</label>
					</div>
				</td>
				<?php
				echo "<td width='334'>" . "<img src='../p_img/" . $row['p_img'] . "'width='auto' height='120px' id='myImg'>" . "</td>";
				echo "<td width='334'>" . $row["p_name"] . "</td>";
				echo "<td width='46' align='right'>" . number_format($row["p_price"], 2) . "</td>";
				echo "<td width='57' align='right'>";
				echo "<input type='text' name='amount[$p_id]' value='$qty' size='2'/></td>";
				echo "<td width='93' align='right'>" . number_format($sum, 2) . "</td>";
				//remove product
				echo "<td width='46' align='center'><a href='cart.php?p_id=$p_id&act=remove'>ลบ</a></td>";
				?>
			</tr>
			<tr>
				<?php
				echo "<td colspan='5' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
				echo "<td align='right' bgcolor='#CEE7FF'>" . "<b>" . number_format($total, 2) . "</b>" . "</td>";
				echo "<td align='left' bgcolor='#CEE7FF'></td>";
				?>
			</tr>
			<tr>
				<td><a href="index.php">กลับหน้ารายการสินค้า</a></td>
				<td colspan="6" align="right">
					<input type="submit" name="button" id="button" value="ปรับปรุง" />
					<input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
				</td>
			</tr>
		</table> -->

	<!-- </form> -->


</body>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include("Back_to_top.php");
?>
<br>
<br>
<?php
include("footer.php");
?>

</html>