<?php
        include('index.php');
 
        $hotelroomname=$_POST['hotelroomname'];
        $roomprice=$_POST['roomprice'];
 
        mysqli_query($conn,"insert into `hotels` (hotelroomname,roomprice) values ('$hotelroomname','$roomprice')");
        header('location:index.php');
?>