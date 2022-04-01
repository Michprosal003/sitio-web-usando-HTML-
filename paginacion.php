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

<style>
a {
    color: white;
    background-color: darkred;
    padding: 15px;
    display: inline-block;
    text-decoration: none;
    border:1px solid white;
    
    
    
    }

</style>






<?php 

$conn=mysqli_connect("localhost","root","","otto");


$por_pagina=5;
if(isset($_GET['pagina']))
$pagina=$_GET['pagina'];

else 
{
    $pagina=1;
}


$empieza=($pagina-1) * $por_pagina;
$query="SELECT * FROM tech LIMIT $empieza,$por_pagina";
$resultado=mysqli_query($conn,$query);
?>


<table class="table table-bordered table-striped table-hover">
<tr>
<td>ID</td>
<td>CODIGO</td>
<td>MATERIA</td>
<td>NOTA</td>
<td>GRUPO</td>
<td>JORNADA</td>
<td>ESTADO</td>
</tr>


<?php 

while($fila=mysqli_fetch_assoc($resultado))
{
    $ID=$fila['ID'];
    $Codigo=$fila['Codigo'];
    $Materia=$fila['Materia'];
    $Nota=$fila['Nota'];
    $Grupo=$fila['Grupo'];
    $Jornada=$fila['Jornada'];
    $Estado=$fila['Estado'];
?>

<tr>
<td><?php echo $ID?></td>
<td><?php echo $Codigo?></td>
<td><?php echo $Materia?></td>
<td><?php echo $Nota?></td>
<td><?php echo $Grupo?></td>
<td><?php echo $Jornada?></td>
<td><?php echo $Estado?></td>
</tr>







<?php 
}
?>


</table>

<!--paginacion-->

<?php 

$query="SELECT * FROM tech ";
$resultado=mysqli_query($conn,$query);

$total_registros=mysqli_num_rows($resultado);
$total_paginas=ceil($total_registros/$por_pagina);


echo"<center><a href='paginacion.php?pagina=1'>".'Anterior'."</a>";

for( $i=1;  $i<=$total_paginas; $i++)

{

    echo"<a href='paginacion.php?pagina=".$i."'>".$i."</a>";

}

echo"<a href='paginacion.php?pagina=$total_paginas'>".'Siguiente'."</a></center>";





?>








</body>
</html>