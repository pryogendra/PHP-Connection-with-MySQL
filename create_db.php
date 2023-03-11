<html>
    <?php
    $conn=mysqli_connect("localhost","root","0000");
    $sql="create database college";
    if(mysqli_query($conn,$sql))
    {
        print("Sucessful");
    }
    ?>
</html>