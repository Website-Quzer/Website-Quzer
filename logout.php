<?php
session_start();
session_destroy();
header("location:sign_in_up.html");
?>