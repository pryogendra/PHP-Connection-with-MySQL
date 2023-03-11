<html>
    <?php
    $conn=mysqli_connect("localhost","root","0000","yogendra");
    $sql="insert student values(5,'Abhishek','Pune')";
    if(mysqli_query($conn,$sql))
    {
        print("Sucessful");
    }
    ?>
</html>