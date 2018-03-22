<?php
 
 require("modelo/notaModel.php");

  ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>prueba</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scalet=1">

	<link rel="stylesheet" type="" href="estilos.css">
	<link rel="stylesheet" type="" href="css/bootstrap.min.css">
</head>

<body>

	<section class="jumbotron">
		<div class="container">
			<h1>Desafio FabricaInfo</h1>
			<p>Maykel Trejo</p>
		</div>
	</section>
	<div class="container">
	 <div class="row">
	 	
	
	<div class="col-md-4" ></div>	
	<div class="col-md-4" >
	<div class="title"> Formulario </div>	
	 <form class="form" role="form" method="post" action="controller/notasController.php" >
        <select class="form-control"  name="categoria">
          <option value="">-Selecionar-</option> 	   
        <?php  
         $sql="SELECT *  FROM categoria";
         $obj=new metodos();
         $resul=$obj->mostrar($sql);
         
         while($array=mysqli_fetch_array($resul)){
         ?>
          <option value="<?php echo $array["id"]; ?>"><?php echo $array["nomeCate"]; ?></option> 

         <?php
         }
         ?>
        </select>
         <p></p>
        <textarea class="form-control" name="nota"  value="" placeholder="nota"></textarea>
        <p></p>
        <input  class="form-control btn btn-primary" type="submit" name="" value="enviar">	
	 </form>
	</div>	
    <div class="col-md-4" ></div>	
	</div>
    <p></p>
    <table class="table">
    	<tr>
    		<td>id_categoria</td>
    		<td>id_nota</td>	
    		<td>Nome Categoria</td>
    		<td>Nota</td>
    		<td>Data</td>
    	</tr>
	    	<?php  
	         $sql="SELECT * FROM categoria INNER JOIN nota ON categoria.id = nota.id_cate";
	         $obj=new metodos();
	         $resul=$obj->mostrar($sql);


	         
	         while($array=mysqli_fetch_array($resul)){
	         ?><tr>
		        <td><?php echo $array["id"]; ?></td>
	    		<td><?php echo $array["id_nota"]; ?></td>	
	    		<td><?php echo $array["nomeCate"]; ?></td>
	    		<td><?php echo $array["nota"]; ?></td>
	    		<td><?php echo $array["data"]; ?></td>
	    	  </tr>
	         <?php
	         }
	         ?>
    
    </table>



	</div>
	<script src="js/jquery.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>




