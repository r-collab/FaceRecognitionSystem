<?php

echo "welcome to the database of credentials.";

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn)
{
    die("Error occoured when connecting to database."mysqli_connect_error));

    else{
        echo"coneection to database succesful";
    }
}

?>