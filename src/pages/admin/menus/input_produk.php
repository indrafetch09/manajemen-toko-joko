<form method= "POST" action="simpan_produk.php">;
<table border='1'>
    <tr>
        <td>ID Produk</td>
        <td><input type="text" class="form-control form=control-sm" value="<?php echo $row['id_produk']?>name="id_produk"></td>
    </tr>
<tr>
    <td>Nama Produk</td>
    <td><input type="text" class="form-control form=control-sm" name="nama_produk"></td>
</tr>
<tr>
    <td>Stok</td>
    <td><input type="text" class="form-control form=control-sm" name="stok"></td>
</tr>
<tr>
    <td>Harga</td>
    <td><input type="text" class="form-control form=control-sm" name="harga"></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" value="simpan"></td>
</tr>
</table>
</form>