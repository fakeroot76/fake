<?
if (ereg("%20union%20", $_
GET['id'])||ereg("union",$_
GET['id']) || ereg("\*union\*",$_
GET['id']) || ereg("\+union\+",
$_GET[id]) || ereg("\*",$_
GET['id']))
{

 
ob_start();
header("location:https://www.instagram.com/f4k3_r00t/"); //fikri walker
ob_flush();
}
?>
