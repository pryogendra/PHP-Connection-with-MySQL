<html>
    <?php
    $conn=mysqli_connect("localhost","root","0000","yogendra");
    $sql1="select*from student";
    $sql=mysqli_query($conn,$sql1);
    if(mysqli_query($conn,$sql1))
    {
       while($row=mysqli_fetch_array($sql))
       {
        echo $row['Roll_no']." ".$row['Name']." ".$row['Address'];
        echo"<br>";
       }
    }
    ?>
</html>