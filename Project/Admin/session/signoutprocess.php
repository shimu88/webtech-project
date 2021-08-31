<?php

if(session_status() >= 0){
session_start();
session_unset();
session_destroy();
echo'<script>alert("Do you want to sign out")</script>';
echo "Signing out please wait";
}

header("refresh: 2; url = /Project/Admin/view/adminlogin.php");;
?>