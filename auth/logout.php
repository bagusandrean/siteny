<?php
// mengaktifkan session
session_start();
// menghapus semua session
session_destroy();
// mengalihkan halaman sambil mengirim pesan logout
echo "alert('Logout Sucess')";
header('location: /auth/login.php')
?>