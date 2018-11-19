<?php
        
        if(isset($_POST['add'])){
	    $cedula              = mysqli_real_escape_string($con,
                    (strip_tags($_POST["cedula"],ENT_QUOTES)));//Escanpando caracteres 
            $nombres             = mysqli_real_escape_string($con,
                    (strip_tags($_POST["nombres"],ENT_QUOTES)));//Escanpando caracteres 
            
	    $apellidos	 = mysqli_real_escape_string($con,
                    (strip_tags($_POST["apellidos"],ENT_QUOTES)));//Escanpando caracteres 
	    $fecha_nacimiento	 = mysqli_real_escape_string($con,
                    (strip_tags($_POST["fecha_nacimiento"],ENT_QUOTES)));//Escanpando caracteres 
	    $direccion           = mysqli_real_escape_string($con,
                    (strip_tags($_POST["direccion"],ENT_QUOTES)));//Escanpando caracteres 
	    $telefono		 = mysqli_real_escape_string($con,
                    (strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
	    $sexo		 = mysqli_real_escape_string($con,
                    (strip_tags($_POST["sexo"],ENT_QUOTES)));//Escanpando caracteres 
            $nivel		 = mysqli_real_escape_string($con,
                    (strip_tags($_POST["nivel"],ENT_QUOTES)));//Escanpando caracteres 
	   
				
			
   	    $existe = mysqli_query($con, "SELECT * FROM empleados WHERE cedula=$cedula") or die(mysql_error());
	    if(mysqli_num_rows($existe) == 0){
		$insert = mysqli_query($con, "INSERT INTO empleados 
                        (cedula, nombres, apellidos, fec_nacimiento, 
                        direccion, telefono, sexo,nivelacad) 
                    VALUES ('$cedula','$nombres', '$apellidos', "
                        . "'$fecha_nacimiento', '$direccion', '$telefono', "
                        . "'$sexo','$nivel')") or die(mysqli_error());
                
		if($insert){
		    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
		}else{
		    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
		}
					 
	    }else{
		echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. cédula ya exite!</div>';
	    }
	}

