<?php
session_start();

if(isset($_POST['logout-submit'])) {
    session_destroy();
    $_SESSION['logout_status'] = 'logged_out';
    header("Location: ../login.php");
    exit();
} else {
    // Handle invalid or unexpected requests
    header("Location: ../index.php");
    exit();
}
?>
