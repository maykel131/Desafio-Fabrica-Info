<?php 
 class metodos{
	private $servidor="mysql.webcindario.com";
    private $usuario="maykelcordero";
    private $password="";
    private $bd="maykelcordero";
  

   
	
 public function conectionMetodo(){
      $con = mysqli_connect($this->servidor,
      	                    $this->usuario,
      	                    $this->password,
      	                    $this->bd);

     return $con;
}

	
 public function insertar($sql){
   
 	
 	$resul=mysqli_query($this->conectionMetodo(),$sql);
    
 	return $resul;
 }





 public function mostrar($sql){
   
 	$resul=mysqli_query($this->conectionMetodo(),$sql);

  return $resul;
 }



}


 


?>
