<?php 

require_once("connection.php");

if(isset($_GET['Del']))
{

    $ID=$_GET['Del'];
        $query="DELETE FROM tech WHERE ID='".$ID."'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header("location:view.php");
        }

        else 
        {
            echo"Revisa tu query nuevamente";
        }
    }

else 
{
    header("location:portal.php");
}



?>