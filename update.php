<html>
    <?php
        $conn=mysqli_connect("localhost","root","0000","college");
        if($conn)
        {
            $update="update department set d_name='Bsc IT' where d_number=3";
            if(mysqli_query($conn,$update))
            {
                print("Sucessful");
            }
        }
    ?>
</html>