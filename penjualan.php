<!DOCTYPE html>
<html>
<head>
	<title>Penjualan</title>
</head>
<body>
	<form action="jual.php" method="POST">
		<h1>PENJUALAN BARANG</h1>
		<table>
			<tr>
				<td>Kode Barang :</td>
				<td><input type="text" name="kode_barang" required=""></td>
			</tr>
			<tr>
				<td>Harga :</td>
				<td><input type="text" name="harga" required=""></td>
			</tr>
			<tr>
				<td>Kuantitas :</td>
				<td><input type="text" name="qty" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" value="SAVE"></td>
				<td><input type="reset" name="CANCEL"></td>
			</tr>
		</table>
	</form>
</body>
</html>