<html>
    <?php
    $conn=mysqli_connect("localhost","root","0000","college");
    $sql1="insert department values('Commeerce',1,2)";
    $sql2="insert department values('PCM',2,4)";
    $sql3="insert department values('PCB',3,5)";
    $sql4="insert department values('Art',4,7)";
    $sql5="insert department values('CS',5,3)";
    mysqli_query($conn,$sql1);
    mysqli_query($conn,$sql2);
    mysqli_query($conn,$sql3);
    mysqli_query($conn,$sql4);
    if(mysqli_query($conn,$sql5))
    {
        print("Sucessful");
    }
    ?>
</html>