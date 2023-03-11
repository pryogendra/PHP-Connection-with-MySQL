<html>
    <?php
    $con=mysqli_connect("localhost","root","0000","college");
    if(!$con)
    {
        print("Error");
    }
    else
    {
        print("Connection sucsessfull");
    }
    $sql="create table department(d_name char(30) not null,d_number int primary key not null,no_of_faculity int)";
    
    mysqli_query($con,$sql);
    ?>
</html>