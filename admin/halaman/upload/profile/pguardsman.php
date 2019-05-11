<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];

$nickm = $_POST['nickm'];
$rlm = $_POST['rlm'];
// Tentukan folder untuk menyimpan file
$folder = "../profile/uploadguardsman/$nama_file";


// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "<script type='text/javascript'>";
  echo "alert('$nama_file sukses terkirim');";
  echo "</script>";
  header('location: ../../../../index.php');
  $konek = mysqli_connect("localhost","root","","kopassus");
  $query = "UPDATE info SET guardsman='$nama_file', nickm='$nickm', rlm='$rlm' WHERE id=1";
  mysqli_query($konek, $query);
}
else{
  echo "File gagal di upload";
}
?>
