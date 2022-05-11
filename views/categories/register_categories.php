<?php
	include ('../../back-end/backconection.php');
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>LiveWire - Series</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">
		
		<!-- Favicon -->
		<link href="../../img/favicon.ico" rel="icon">
		
		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">
		
		<!-- Icon Font Stylesheet -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
		
		<!-- Libraries Stylesheet -->
		<link href="../../lib/animate/animate.min.css" rel="stylesheet">
		<link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		
		<!-- Customized Bootstrap Stylesheet -->
		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Template Stylesheet -->
		<link href="../../css/style.css" rel="stylesheet">
	</head>
	<body>
		<?php
			if(isset($_POST['n_insert'])){
				$v_name = $_POST['n_name'];
				$v_description = $_POST['n_description'];
				$v_img = $_POST['n_img'];
				
				$instruction = "INSERT INTO lws_categorias (lws_cat_nombre, lws_cat_descipcion, lws_cat_imagen) VALUES ('$v_name', '$v_description', '$v_img')";
				$execute = mysqli_query($connection, $instruction);
				if($execute){
					//echo "<script>alert('Categoria almacenada exitosamente')</script>";
					//echo "<script>window.open('general_query_categories.php','self')</script>";
					//header('location: general_query.php');
				}
				else{
					//echo "<script>alert ('El registro ya existe')</script>";
					//echo "<script>window.open('register_form_categories.php','self')</script>";
				}
			}
		?>

		<!-- Spinner Start -->
		<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Spinner End -->
	
		<!-- Page Header Start -->
		<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
			<div class="container text-center py-5">
				<h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">CATEGORIAS</h1>
				<nav aria-label="breadcrumb animated slideInDown">
					<ol class="breadcrumb justify-content-center text-uppercase mb-0">
						<li class="breadcrumb-item"><a class="text-white" href="#">ANIMES</a></li>
						<li class="breadcrumb-item"><a class="text-white" href="#">SERIES</a></li>
						<li class="breadcrumb-item"><a class="text-white" href="#">PELICULAS</a></li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- Page Header End -->
	
		<!-- Contact Start -->
		<div class="container-xxl py-5">
			<div class="container">
				<div class="row g-0">
					<div data-wow-delay="0.1s">
						<div class="bg-secondary p-5">
							<h1 class="text-uppercase mb-4">Registro de categorias!</h1>
							<p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
							<form method="POST" action="register_categories.php">
								<div class="row g-3">
									<div class="col-12">
										<div class="form-floating">
										<input type="text" class="form-control bg-transparent" name="n_name" id="i_name" placeholder="Ej. Caballeros del zodíaco" required>
											<label for="name">Nombre</label>
										</div>
									</div>
									<div class="col-12">
										<div class="col-12">
											<div class="form-floating">
												<textarea class="form-control bg-transparent" name="n_description" id="i_description" placeholder="Ej. Caballeros del zodíaco es un anime..." style="height: 100px" required></textarea>
												<label for="message">Descripción</label>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-floating">
											<input type="text" class="form-control bg-transparent" name="n_img" id="i_img" placeholder="Subject" required>
											<label for="subject">Imagen</label>
										</div>
									</div>
									<div class="col-md-6" class="form-floating">
										<button class="btn btn-success w-100 py-3" type="submit" name ="n_insert">Guardar</button>
									</div>
									<div class="col-md-6" class="form-floating">
										<button class="btn btn-danger w-100 py-3" type="submit">Cancelar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact End -->
	
		<!-- Back to Top -->
		<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
		
		<!-- JavaScript Libraries -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="../../lib/wow/wow.min.js"></script>
		<script src="../../lib/easing/easing.min.js"></script>
		<script src="../../lib/waypoints/waypoints.min.js"></script>
		<script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
		
		<!-- Template Javascript -->
		<script src="../../js/main.js"></script>
	</body>
</html>