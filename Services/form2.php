 <?php 
 $uploaddir = "D:/Xampp/Webserver_2017/Upload/";
 $uploadfile = $uploaddir . basename($_FILES['archivo']['name']);
 $error = $_FILES['archivo']['error'];
 $subido = false;
 if(isset($_POST['boton']) && $error==UPLOAD_ERR_OK) { 
   $subido = copy($_FILES['archivo']['tmp_name'], $uploadfile); 
  } 
   if($subido) {  
    echo'<script language = javascript>
    alert("Serverweb: El archivo fue subido con exito.")
    self.location="subir_file.html"</script>';
   } 
   else{
    echo'<script language = javascript>
    alert("Serverweb: No se ha seleccionado ningun archivo o el archivo es mayor a 2Mb.")
    self.location="subir_file.html"</script>';
  }
  ?>
