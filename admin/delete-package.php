<?php
include('includes/config.php');

if(isset($_GET['pid']))
{
    $id=$_GET['pid'];

    $sql = "DELETE FROM TblTourPackages WHERE PackageId=:id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':id',$id,PDO::PARAM_STR);
    $query->execute();

    header('location:manage-packages.php');
}
?>
