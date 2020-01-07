<?php
session_start();
include('include/dbconnection.php');
session_start();
$_SESSION['alogin']=="";
session_unset();
$_SESSION['msg']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="index.php";
</script>