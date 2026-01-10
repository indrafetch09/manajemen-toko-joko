<?php
include "database.php";
$query = mysqli_query ($koneksi, "select * from dokter where id_dokter ='$_GET[id_dokter]' ");
$row = mysqli_fetch_array($query);
?>
<form method= "POST" action="update_produk.php">;
<class= table>
    <tr>
        <td>ID Dokter</td>
        <td><input type="text" class="form-control form=control-sm" name="id_produk" value="<?php
        echo $row['id_produk']; ?>"></td>
    </tr>
<tr>
    <td>nama</td>
    <td><input type="text" class="form-control form=control-sm" name="nama_produk" value="<?php
        echo $row['nama_produk']; ?>"></td>
</tr>
<tr>
    <td>spesialisasi</td>
    <td><input type="text" class="form-control form=control-sm" name="stok" value="<?php
        echo $row['spesialisasi']; ?>"></td>
</tr>
<tr>
    <td>No STR</td>
    <td><input type="text" class="form-control form=control-sm" name="harga" value="<?php
        echo $row['no_str']; ?>"></td>
</tr>
<tr>
    <td colspan="2"><input class="form-control form=control-sm" type="submit" value="simpan">
        <a href = "?page=">
            <input type="button" value="kembali">
        </a>
    </td>
</tr>
</table>
</form>