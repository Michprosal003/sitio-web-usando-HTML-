<?php 

require_once("connection.php");
$query="SELECT * FROM tech";
$result=mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <title>Document</title>
</head>
<body>


<table class="table table-bordered table-hover table-striped">
<tr>
<td class=" text-white bg-secondary">ID</td>
<td class=" text-white bg-primary">CODIGO</td>
<td class=" text-white bg-warning">MATERIA</td>
<td class=" text-white bg-info">NOTA</td>
<td class="  text-white bg-danger">GRUPO</td>
<td class=" text-white bg-success">JORNADA</td>
<td class="text-white bg-dark" >ESTADO</td>
<td>ACCION</td>
<td>ACCION</td>
<td>ACCION</td>
</tr>

<?php 

while($row=mysqli_fetch_assoc($result))
{

    $ID=$row['ID'];
    $Codigo=$row['Codigo'];
    $Materia=$row['Materia'];
            $Nota=$row['Nota'];
            $Grupo=$row['Grupo'];
            $Jornada=$row['Jornada'];
            $Estado=$row['Estado'];


?>

<tr>
<td><?php echo $ID?></td>
<td><?php echo $Codigo?></td>
<td><?php echo $Materia?></td>
<td><?php echo $Nota?></td>
<td><?php echo $Grupo?></td>
<td><?php echo $Jornada?></td>
<td><?php echo $Estado?></td>
<td><a href="edit.php?GetID=<?php echo $ID?>"class="btn btn-danger">Actualizar</a>
<td><a href="delete.php?Del=<?php echo $ID?>"class="btn btn-secondary">Eliminar</a>
<td><a href="paginacion.php"class="btn btn-warning">view</a>

</tr>

<?php 
}
?>





</table>


    
</body>
</html>