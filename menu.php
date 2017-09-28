<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registra tu menú</title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  
      <link rel="stylesheet" href="css/style2.css">

  
</head>

<body>
  <body>
	  <h1>Formulario de registro de menú.</h1>
   <div class="info"><a href="http://www.grandvincent-marion.fr" target="_blank"><p>¡Manten siempre tu información actualizada!</p></a></div>
  
  <form method="post" action="add_product.php">
	    <h1>Should you have any questions, please do not hesitate to contact me :</h1>
	    
    <div class="contentform">
    	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


    	<div class="col-md-12">
            <div class="form-group">
            <p>Nombre del producto<span>*</span></p>
            <span class="icon-case"><i class="fa fa-pencil"></i></span>
				<input type="text" name="name" id="nombre" data-rule="required"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Descripción <span>*</span></p>
			<span class="icon-case"><i class="fa fa-paperclip"></i></span>
                <textarea name="description" rows="14" data-rule="required" ></textarea>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Precio <span>*</span></p>
			<span class="icon-case"><i class="fa fa-map-dollar"></i></span>
				<input type="number" name="price" id="precio" data-rule="required"/>
                <div class="validation"></div>
			</div>	



	</div>

	</div>
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<input type="submit" name="submit" value="Agregar al menú" class="bouton-contact">
	
</form>	

  
</body>
</html>
  
    <script src="js/menu.js"></script>

</body>
</html>
