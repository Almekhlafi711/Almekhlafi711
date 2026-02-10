<?php
session_start();
session_destroy();
header('Location: /portfolio/admin/login.php');
exit;
