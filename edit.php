
<?php 

require_once("connection.php");
$ID=$_GET['GetID'];
$query="SELECT * FROM tech WHERE ID='".$ID."'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{

    $ID=$row['ID'];
    $Codigo=$row['Codigo'];
    $Materia=$row['Materia'];
            $Nota=$row['Nota'];
            $Grupo=$row['Grupo'];
            $Jornada=$row['Jornada'];
            $Estado=$row['Estado'];
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    


<div class="batman">
<img src="imagenes/react.png" alt="avatar" class="avatar">
<div class="Panama">



<form action="update.php?ID=<?php echo $ID?>" method="POST" style="max-width:500px;margin:auto">


<div class="zepolito">
<i class="fa fa-user icon"></i>
<input class="multiverso" type="text" name="Codigo" placeholder="Codigo" value="<?php echo $Codigo?>">
</div>


<div class="zepolito">
<i class="fa fa-user icon"></i>
<input class="multiverso" type="text" name="Materia" placeholder="Materia"    value="<?php echo $Materia?>">        
</div>

<div class="zepolito">
<i class="fa fa-user icon"></i>
<input class="multiverso" type="text" name="Nota" placeholder="Nota"     value="<?php echo $Nota?>">      
</div>

<div class="zepolito">
<i class="fa fa-user icon"></i>
<input class="multiverso" type="text" name="Grupo" placeholder="Grupo"    value="<?php echo $Grupo?>">        
</div>

<div class="zepolito">
<i class="fa fa-user icon"></i>
<input class="multiverso" type="text" name="Jornada" placeholder="Jornada"        value="<?php echo $Jornada?>">      
</div>

<div class="zepolito">
<i class="fa fa-user icon"></i>
<input class="multiverso" type="text" name="Estado" placeholder="Estado"   value="<?php echo $Estado?>">          
</div>


<button class="udelismo" name="update">Actualizar</button>
</div>

</form>




</body>
</html>