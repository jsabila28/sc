<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
if(empty($_SESSION['user_id']) && !in_array($_SERVER['REQUEST_URI'], ['/sc_admin/login', '/sc_admin/signIn', '/sc_admin/signOut'])){
    header("LOCATION: /sc_admin/login");
}

$admin_root  = $_SERVER['DOCUMENT_ROOT']."/sc_admin";
$main_root = $admin_root ."/main";
$sr_root = $admin_root ."/stockrotation";

// sidenav
$sidenav = $main_root."/layout/sidenav.php";

// layout + route
include_once($main_root."/routes/route.php");