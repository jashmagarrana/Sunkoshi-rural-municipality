<?php
$personalid=$_GET['personalid'];
$con=mysqli_connect('localhost','root','','sunkoshi');
$sql="DELETE FROM personaldetails WHERE personalid=$personalid";
mysqli_query($con,$sql);
header("location:deleterecord.php");
?>
<?php
$eduid=$_GET['eduid'];
$con1=mysqli_connect('localhost','root','','sunkoshi');
$sql1="DELETE FROM eduorg WHERE eduid=$edulid";
mysqli_query($con1,$sql1);
header("location:deleterecord.php");
?>

<?php
$govid=$_GET['govid'];
$con2=mysqli_connect('localhost','root','','sunkoshi');
$sql2="DELETE FROM govorg WHERE govid=$govid";
mysqli_query($con2,$sql2);
header("location:deleterecord.php");
?>

<?php
$healthid=$_GET['healthid'];
$con3=mysqli_connect('localhost','root','','sunkoshi');
$sql3="DELETE FROM healthorg WHERE healthid=$healthid";
mysqli_query($con3,$sql3);
header("location:deleterecord.php");
?>

<?php
$microid=$_GET['microid'];
$con4=mysqli_connect('localhost','root','','sunkoshi');
$sql4="DELETE FROM micro WHERE microid=$microid";
mysqli_query($con4,$sql4);
header("location:deleterecord.php");
?>

<?php
$mediumid=$_GET['mediumid'];
$con5=mysqli_connect('localhost','root','','sunkoshi');
$sql5="DELETE FROM medium WHERE mediumid=$mediumid";
mysqli_query($con5,$sql5);
header("location:deleterecord.php");
?>

<?php
$meagid=$_GET['megaid'];
$con6=mysqli_connect('localhost','root','','sunkoshi');
$sql6="DELETE FROM mega WHERE megaid=$megaid";
mysqli_query($con6,$sql6);
header("location:deleterecord.php");
?>

<?php
$ngovid=$_GET['ngovid'];
$con7=mysqli_connect('localhost','root','','sunkoshi');
$sql7="DELETE FROM ngovorg WHERE ngovid=$ngovid";
mysqli_query($con7,$sql7);
header("location:deleterecord.php");
?>

<?php
$privid=$_GET['privid'];
$con8=mysqli_connect('localhost','root','','sunkoshi');
$sql8="DELETE FROM privorg WHERE privid=$privid";
mysqli_query($con8,$sql8);
header("location:deleterecord.php");
?>