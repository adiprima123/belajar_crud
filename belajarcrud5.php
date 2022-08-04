<html>
    <head>
        <title>menampilkan database web</title>
    </head>
    <body>
        <h2>CRUD DATA PERUSAHAAN</h2>
        
<br/>
<a href= "tambah.php">tambah data</a>
<br/>
<br/>
<h3>anggota</h3>
<table border="2">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>no tlp</th>
        <th>alamat</th>
        <th>email</th>
    </tr>

<?php
//belajar koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_perpusweb";

//membuat koneksi
$connect = mysqli_connect($servername,$username,$password,$database);

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
</table>
</body>
</html>
</html>