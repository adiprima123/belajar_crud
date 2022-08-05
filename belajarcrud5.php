<html>
    <head>
        <title>menampilkan database web</title>
    </head>
    <body>
        <h2>CRUD DATA PERUSAHAAN</h2>
        
<br/>
<h3>ANGGOTA</h3>
<a href= "tambah.php">tambah data</a>
<br/>
<table border="2">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>no tlp</th>
        <th>alamat</th>
        <th>email</th>
    </tr>

<?php
include 'koneksi.php';
$no= 1;
$data = mysqli_query($connect,"SELECT * FROM anggota");
while($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['no_tlp']; ?></td>
    <td><?php echo $d['alamat']; ?></td>
    <td><?php echo $d['email']; ?></td>
    <var_dump($d)?>
</tr>
<?php

}
?>
<br/>
</table>
<br/>
<br/>
<h3>ADMIN</h3>
<br/>
<br/>
<table border="2">
    <tr>
        <th>no</th>
        <th>id admin</th>
        <th>username</th>
    </tr>

<?php
$no= 1;
$data = mysqli_query($connect,"SELECT * FROM admin");
while($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $d['id_admin']; ?></td>
    <td><?php echo $d['username']; ?></td>
    <var_dump($d)?>
</tr>
<?php
    
}
?>

</table>
    
<br/>
</table>
<br/>
<br/>
<h3>BOOK</h3>
<br/>
<br/>
<table border="2">
    <tr>
        <th>no</th>
        <th>id_katalog</th>
        <th>judul buku</th>
        <th>pengarang</th>
        <th>tahun terbit</th>
        <th>penerbit</th>

    </tr>

<?php
$no= 1;
$data = mysqli_query($connect,"SELECT * FROM book");
while($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $d['id_katalog']; ?></td>
    <td><?php echo $d['judul_buku']; ?></td>
    <td><?php echo $d['pengarang']; ?></td>
    <td><?php echo $d['thn_terbit']; ?></td>
    <td><?php echo $d['penerbit']; ?></td>
    <var_dump($d)?>
</tr>
<?php
    
}
?>

</table>
</body>
</html>
</html>