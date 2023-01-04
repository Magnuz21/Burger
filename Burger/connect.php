
<?php
$con = new mysqli('localhost','root','','burgercafe');

if ($con){
    die(mysqli_error($con));
}
?>