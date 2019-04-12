<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio </title>
	<link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<!--======================================== Boton ir arriba ==================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
	<?php include('include/header.php');?>
	</header>
	<!--======================================== Logo & Lema =======================================-->
	<section class="full-reset font-cover" style="background-image: url(assets/img/graficaso.jpg);">
		<div class="full-reset" style="height: 100%; background-color: rgba(255,255,255,.6); padding: 60px 0;">
			<h1 class="text-center titles" style="color: #000000;"><strong>¡Bienvenido a Forex Trading World!</strong></h1>
			<figure class="Logo-Ins-Index">
				<img src="assets/img/logo.png" alt="Logo" class="img-responsive img-rounded">
			</figure>
			<p class="lead text-center">
				<strong>"Si realmente quieres hacer algo, encontrarás una forma, Si no, encontrarás una excusa."<br>- Jim Rohn.</strong>
			</p>
		</div>
	</section>
	<div class="divider-general"></div>
	<!--======================================== Video corto & carrusel========================================-->
	<section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
		<div class="container">
			<h2 class="text-center titles"><i class="fa fa-globe"></i> Zona de descargas.</h2>
			<hr>
			<?php
			$centi=0;
			if($centi!=0):			
			?>
            <form action="../controlador/c_documentos.php" method="post" enctype= multipart/form-data>
                <div class="row">
                    <div class="col-md-12">
                        <div class="from-group">
                            <input type="file" name="archivo" class="form-control-file">
                        </div>
						<div class="form-group">
							<button type= "submit" name="opcion" value="subir" class="btn btn-primary">Subir archivo <i class="fa fa-upload"></i></button>                    
						</div>
                    </div>                
                </div>            
            </form>
			<?php endif; ?>

			<div class="text-justify">
				<ul>
					<li><a href="doc/Trade.xlsx" class="btn btn-link btn-lg"> <i class="fa fa-file"></i>Trade.xlsx <i class="fa fa-download"></i></i></a></li>
					<li><a href="doc/GESTION DE RIESGO-1.xlsx" class="btn btn-link btn-lg"> <i class="fa fa-file"></i>GESTION DE RIESGO-1.xlsx <i class="fa fa-download"></i></i></a></li>
				</ul>
			</div>
			
		</div>
	</section>
<!-- 	<div class="divider-general"></div>
 -->	
	
	<!--======================================== Pie de pagina ========================================-->
	<footer class="full-reset footer">
		<?php include('include/footer.php'); ?>
	</footer>
</body>
</html>