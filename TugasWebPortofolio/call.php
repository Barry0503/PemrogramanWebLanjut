<?php
  include 'config2.php';

    
   $identity = $_POST['identity'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $sumber = $_FILES['gambar']['tmp_name'];
    $target = 'upload/';
    $nama_gambar = $_FILES['gambar']['name'];
  $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
  
      $query = "INSERT INTO contact (identity, email, phone, message, avatar) VALUES ('$identity', '$email', '$phone', '$message', '$nama_gambar')";
      $dewan1 = mysqli_query($db1,$query);
      if( $dewan1 ) {
          header('Location: index.php?status=sukses');
        } else {
          header('Location: index.php?status=gagal');
        }
      
?>
