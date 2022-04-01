<?php 

require_once("connection.php");

if(isset($_POST['submit']))
{
    if(empty($_POST['Codigo']) || empty($_POST['Materia']) || empty($_POST['Nota']) || empty($_POST['Grupo']) || empty($_POST['Jornada']) || empty($_POST['Estado'])) 
    {
        echo"Completa este campo";
    }     

    else 
    {
        $Codigo=$_POST['Codigo'];
        $Materia=$_POST['Materia'];
        $Nota=$_POST['Nota'];
        $Grupo=$_POST['Grupo'];
        $Jornada=$_POST['Jornada'];
        $Estado=$_POST['Estado'];
        $query="INSERT INTO tech(Codigo,Materia,Nota,Grupo,Jornada,Estado)VALUES('$Codigo','$Materia','$Nota','$Grupo','$Jornada','$Estado')";
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
}
else 
{
    header("location:portal.php");
}



?>