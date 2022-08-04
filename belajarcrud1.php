<html>
<head>
    <title>belajar get dan post</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama">
        <label for="alamat">alamat</label>
        <input type="text" name="alamat" id="alamat">
        <input type="submit" name="submit" value="submit">     `
    </form>
    <?php
    // belajar get dan post
    // get = data di oper ke web dengan secara terlihat (di url)
    // post = data di oper ke web dengan secara tidak terlihat (di url) 
    if ($_POST){
        echo "nama : " . $_POST["nama"];
        echo "</br>";
        echo "alamat : " . $_POST["alamat"];
    }
    ?>
</body>
</html>
