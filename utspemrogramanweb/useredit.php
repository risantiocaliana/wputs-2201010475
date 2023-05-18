<?php
    $iduser = $_GET["pi"];
    $sql = "SELECT tu.nama, tu.email, tu.username from tbmahasiswa tu where tu.iduser='$iduser';";
    $hasil = mysqli_query($cnn, $sql);
    if(mysqli_num_rows($hasil) > 0){
        $h = mysqli_fetch_assoc($hasil);
    
?>
<h3>Ubah  Data Mahasiswa <?=$h["username"]?></h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="update">
    <input type="hidden" name="iduser" value="<?=$iduser?>">
    <div class="form-floating mb-3">
         <input type="text" name="txNAMA"  class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?=$h["nama"]?>">
         <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
         <input type="email" name="txEMAIL"  class="form-control" id="floatingInput" placeholder="Alamat Email" value="<?=$h["email"]?>">
         <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
         <input type="text" name="txUSER"  class="form-control" id="floatingInput" placeholder="User Name"value="<?=$h["username"]?>">
         <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating mb-3">
         <input type="password" name="txPASS1"  class="form-control" id="floatingInput" placeholder="Password">
        <label for="floatingInput">Password</label>
    </div>
    <div class="form-floating mb-3">
         <input type="password" name="txPASS2"  class="form-control" id="floatingInput" placeholder="Verifikasi Password">
        <label for="floatingInput"> Verifikasi Password</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Ubah data Mahasiswa</button>
    <a href="datamahasiswa.php" class="btn btn-secondary"> Batal </a>
</form>
<?php
    }else{
        echo "<script>window.location.href='datamahasiswa.php';</script>";
    }
?>