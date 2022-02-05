<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Left Sidebar template - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<?php include_once("header.php"); ?>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
	
		<table class="table table-hover">
			<thead>
				<th>Nom</th>
				<th>Evaluation </th>
				<th>Taux</th>
				<th>justifications ou commentaires</th>
				<th></th>
			</thead>
			<tbody>
				
					<tr>
						<form action="/Exigences/Exigences/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">Art 10: Amélioration </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">10.1: Non-conformité et action corrective </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/93" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr 93: L’organisme réagit à chaque non-conformité pour la corriger, la maîtriser et prendre en charge les conséquences </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/94" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr94: L’organisme évalue la nécessité de traiter les causes des non-conformités </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/95" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr95: L’organisme met en œuvre toutes les actions correctives requises </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/96" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr96: L&#x27;organisation révise l&#x27;efficacité de toute action corrective mise en œuvre </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/97" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr97: L&#x27;organisme modifie, si nécessaire, le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/98" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr98: Les actions correctives sont à la mesure des effets des non-conformités </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/99" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr99: L&#x27;organisation doit conserver des informations documentées comme preuves de la nature des non-conformités et de toute action subséquente et des résultats de toute action corrective </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">10.2:  Amélioration continue </td>
							<td>
								
								Conforme
								
							</td>
							<td>
								
								95.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/100" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr100 L’organisme s’engage à améliorer en continu la pertinence, l&#x27;adéquation et la performance du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai" selected>Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="95.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
										
				
				
	</div>	<!-- /container -->
	

	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>




