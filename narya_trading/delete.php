<?php
include 'config.php';
$narya_trading=$_GET['narya_trading'];
$result=mysqli_query($link, "delete from course where narya_trading=$narya_trading");
echo "<script>alert('Hapus maklumat berjaya');
window.location='senarai_kursus.php'</script>";
?>
?>