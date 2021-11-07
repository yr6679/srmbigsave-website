<?php 

$server = "sql304.epizy.com";
$user = "epiz_30298679";
$pass = "vFPdF8H4K7pcQx";
$database = "epiz_30298679_srm_bigsave";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>