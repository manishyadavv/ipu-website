<?php session_start();
include"../../credential.conf";

   try{
	if(!isset($_SESSION["uid"])){
    $_SESSION['uid']=123;
$sql = "UPDATE hitcounter ".
       "SET hitcount = hitcount+1";
	$retval = mysql_query( $sql, $conn );
}
$sql = "SELECT hitcount FROM hitcounter LIMIT 1";
$retval = mysql_query( $sql, $conn );
       $row = mysql_fetch_array($retval, MYSQL_ASSOC);
    print "{$row['hitcount']} ";
mysql_close($conn);
        }catch(Exception $e){}
  ?>
        