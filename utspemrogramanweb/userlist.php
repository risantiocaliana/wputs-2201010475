<h3>Daftar Mahasiswa</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Email</th>
      <th scope="col"><a href="datamahasiswa.php?aksi=new"class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
    </tr>
  </thead>
  <tbody>
  <?php 
$sql = "SELECT tu.nama, tu.email, tu.iduser from tbmahasiswa tu order by tu.nama;";
$hasil = mysqli_query($cnn, $sql);
$cx  = 0;
while($h = mysqli_fetch_assoc($hasil)){
    $cx++;
  ?>
    <tr>
      <th scope="row"><?=$cx?></th>
      <td><?=$h["nama"]?></td>
      <td><?=$h["email"]?></td>
      <td><a href="datamahasiswa.php?aksi=edit&pi=<?=$h["iduser"]?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;edit</a>
      <a href="datamahasiswa.php?aksi=del&pi=<?=$h["iduser"]?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</td>
    </tr>
<?php
}
?>

  </tbody>
</table>