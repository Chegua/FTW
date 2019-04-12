<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Institucion</title>
	<link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/demo.css"> -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/jquery.gridder.min.css">
  <link rel="stylesheet" href="css/style.css">


  <script src="js/jquery-3.3.1.min.js"></script>
	 <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	 <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script> -->
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.gridder.min.js"></script>

	<script src="js/main.js"></script>

  <?php
	require_once "contenido.php";
	$datos=contenido();
	?>

</head>
<body>
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<?php include('include/header.php');?>
  </header>
	<!--======================================== Contenido de la pagina ========================================-->
	<section class="full-reset section-gallery-ins">
		<!--======================================== Eventos del 2013 ========================================-->
		<article class="container">

      <ul class="gridder">
        <?php
        for ($i=0; $i < count($datos) ; $i++):
          $d=explode("||", $datos[$i]);

          ?>
          <li class="gridder-list"
          data-griddercontent="<?php echo '#gridder-content-'.$i ?>">

            <div class="thumbnail">
              <img src="<?php echo $d[0] ?>" alt="Default" class="img-rounded img-responsive">
              <div class="caption">
                <p class="text-center"><strong>Grupo <?php echo $i+1; ?></strong></p>

              </div>
            </div>
          </li>


          <?php
        endfor;
        ?>
      </ul>

      <?php
        for ($i=0; $i < count($datos); $i++):
            $d=explode("||", $datos[$i]);
      ?>
        <div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content" >
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <img src="<?php echo $d[0] ?>" class="img-responsive" />
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <h2><?php echo $d[1]; ?></h2>
              <p><?php echo $d[2]; ?></p>
            </div>
          </div>
        </div>
      <?php
        endfor;
      ?>

		</article>
		<div class="divider-general"></div>
		<!--======================================== Eventos del 2012 ========================================-->
		<article class="container">
			<h2 class="text-center"><i class="fa fa-calendar-o"></i> &nbsp; Eventos Año 2012</h2>
			<div class="row">
				<!--======================================== Evento 1========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
				<!--======================================== Evento 2========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
				<!--======================================== Evento 3========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
				<!--======================================== Evento 4========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
				<!--======================================== Evento 5========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
				<!--======================================== Evento 6========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
			</div>
		</article>

		<div class="divider-general"></div>
		<!--======================================== Fotos de la institucion ========================================-->
		<article class="container">
			<h2 class="text-center"><i class="fa fa-picture-o"></i> &nbsp; Fotos Instalaciones</h2>
			<div class="row">
				<!--======================================== Evento 1========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
				<!--======================================== Evento 2 ========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
				<!--======================================== Evento 3 ========================================-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="tile-gallery">
						<img src="assets/gallery/default.png" alt="Default">
						<p class="text-center"><strong>Título</strong></p>
						<span class="text-center"><strong><small>Sub-Título</small></strong></span>
						<div class="divider-general"></div>
						<a href="#!">
							<i class="fa fa-picture-o"></i> &nbsp; Ver fotos
						</a>
					</div>
				</div>
			</div>
		</article>
	</section>
	<!--======================================== Pie de pagina ========================================-->
	<footer class="full-reset footer">
	   <?php include('include/footer.php'); ?>
	</footer>

</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
  $(".gridder").gridderExpander({
    scroll: true,
    scrollOffset: 60,
                  scrollTo: "listitem", // panel or listitem
                  animationSpeed: 100,
                  animationEasing: "easeInOutExpo",
                  showNav: true,
                  nextText: "<button class=\"btn btn-info btn-sm\"> <i class=\"fa fa-arrow-right\"></i></button>",
                  prevText: "<button class=\"btn btn-info btn-sm\"> <i class=\"fa fa-arrow-left\"></i></button>",
                  closeText: "<button class=\"btn btn-danger btn-sm\"> <i class=\"fa fa-times\"></i></button>",
                  onStart: function () {
                    console.log("Gridder Inititialized");
                  },
                  onContent: function () {
                    console.log("Gridder Content Loaded");
                    $(".carousel").carousel();
                  },
                  onClosed: function () {
                    console.log("Gridder Closed");
                  }
              });
});
</script>
