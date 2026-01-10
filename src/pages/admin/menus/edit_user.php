<?php
include "database.php";
$query = mysqli_query ($koneksi, "select * from users where id_user ='$_GET[id_user]' ");
$row = mysqli_fetch_array($query);
?>
<form method= "POST" action="update_produk.php">;
<class= table>
    <tr>
        <td>ID Dokter</td>
        <td><input type="text" class="form-control form=control-sm" name="id_user" value="<?php
        echo $row['id_produk']; ?>"></td>
    </tr>
<tr>
    <td>nama</td>
    <td><input type="text" class="form-control form=control-sm" name="nama" value="<?php
        echo $row['nama']; ?>"></td>
</tr>
<tr>
    <td>spesialisasi</td>
    <td><input type="text" class="form-control form=control-sm" name="email" value="<?php
        echo $row['email']; ?>"></td>
</tr>
<tr>
    <td>No STR</td>
    <td><input type="text" class="form-control form=control-sm" name="password" value="<?php
        echo $row['password']; ?>"></td>
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