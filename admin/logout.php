<?php
    session_start();
    unset($_SESSION['id']);
    session_destroy();
    if(session_destroy()) {
        header('location:admin.php');
    }
    
?>
