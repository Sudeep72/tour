<?php
include('includes/config.php');

if(isset($_GET['pid']))
{
    $id=$_GET['pid'];

    $sql = "DELETE FROM TblTourPackages WHERE PackageId=:id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':id',$id,PDO::PARAM_STR);
    $query->execute();
    $count = $query->rowCount();
    if($count > 0){
        $success_message = "Package deleted successfully";
        $_SESSION['success'] = $success_message;
    }

    header('location:manage-packages.php');
}
?>
