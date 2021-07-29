<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS</title>
</head>
<body>


<form action="" method="post">
    <h3 style="text-align: center;">FORM PENDAFTARAN SIDANG PROYEK</h3>
    <label for="" class="text1">
        NIM
        <input type="number" name="nim" style="margin-left: 90px;">
    </label>
    <br>
    <label for="" class="text1">
        Nama
        <input type="text" name="nama" style="margin-left: 82.5px;">
    </label>
    <br>
    <label class="text1">
        Proyek
        <select name="proyek" style="margin-left: 76px;">
            <option value="Proyek 1">Proyek 1</option>
            <option value="Proyek 2">Proyek 2</option>
            <option value="Proyek 3">Proyek 3</option>
            <option value="Proyek 4">Proyek 4</option>
        </select>
    </label>
    <br>
    <label for="" class="text1">
        Judul Proyek
        <textarea name="judul" cols="30" rows="5" style="margin-left: 38px;"></textarea>
    </label>
    <br>
    <br>
    <div class="text1">
        <input type="submit" name="submit" value="Submit" style="margin-left: 150px;">
        <input type="submit" name="reset" value="Reset" >
        <a href="home.php">kembali</a>
    </div>
</form>


<?php 
if(isset($_POST['submit'])){
 ?>
   <div  style="margin-top:10px;">
        <p>Terima kasih telah melakukan daftar sidang, silahkan tunggu info berikutnya untuk jadwal sidang! <br>
            Data yang anda masukan adalah sebagai berikut : </p>
        <p> Nim : <?php echo $_POST['nim']; ?></p> 
        <p> Nama : <?php echo $_POST['nama'] ?></p> 
        <p> Proyek : <?php echo $_POST['proyek'] ?></p> 
        <p> Judul Proyek : <?php echo $_POST['judul'] ?></p>
        </div>

 <?php   
}
?>


</body>
</html>

<style>
    .text1{
        margin-left: 500px;
    }
    p{
        text-align: center;
    }
</style>