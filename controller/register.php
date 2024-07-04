<?php


include_once "auth.php";


if(isset($_POST['register'])){
    $register = new Auth;
    if ($register->register($_POST)) {
        echo "<script>
        alert('User Baru Ditambahkan');
        document.location.href = '../index.php?status=1';
  </script>";
    } else {
        header("Location: register.php");
        exit();
    }

}
?>
