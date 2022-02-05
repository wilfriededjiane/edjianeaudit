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
						<form action="/Exigences/Exigences/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">Art9 Évaluation des performances </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								33.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">9.1: Surveillance, mesure, analyse et évaluation </td>
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
						<form action="/Exigences/Exigences/71" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr71: Les performances de sécurité de l&#x27;information ainsi que l&#x27;efficacité du SMSI sont évaluées </td>
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
						<form action="/Exigences/Exigences/72" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr72: Ce qui est nécessaire de surveiller et de mesurer est déterminé </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
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
						<form action="/Exigences/Exigences/73" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr73: Les méthodes de surveillance, de mesurage, d&#x27;analyse et d&#x27;évaluation, pour assurer la validité des résultats sont déterminées </td>
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
						<form action="/Exigences/Exigences/74" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr74: L&#x27;organisme détermine quand la surveillance et les mesures doivent être effectuées </td>
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
						<form action="/Exigences/Exigences/75" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr75: L&#x27;organisme détermine qui doit effectuer la surveillance et les mesures </td>
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
						<form action="/Exigences/Exigences/76" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr76: L&#x27;organisme détermine quand les résulats de la surveillance et des mesures doivent-être analysées et évaluées </td>
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
						<form action="/Exigences/Exigences/77" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr77: L&#x27;organisme détermine qui doit analyser et évaluer les résultats </td>
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
						<form action="/Exigences/Exigences/78" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr78: Les informations documentées appropriées comme preuves des résultats de la surveillance et des mesures sont conservées </td>
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
						<form action="/Exigences/Exigences/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">9.2: Audit interne </td>
							<td>
								
								Convaincant
								
							</td>
							<td>
								
								70.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/79" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr79: Les audits internes sont planifiés, établis et mis en œuvre à des intervalles déterminés </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/80" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr80: Les critères et le périmètre de chaque audit sont définis </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/81" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr81: Les auditeurs sont sélectionnés en s&#x27;assurant de l&#x27;objectivité et de l&#x27;impartialité du processus d&#x27;audit. </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/82" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr82: Les résultats des audits sont communiqués à la direction concernée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="80.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/83" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr83: Des informations documentées sont conservées comme preuves de la mise en œuvre du programme d&#x27;audit et  de ses résultats. </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">9.3: Revue de direction </td>
							<td>
								
								Insuffisant
								
							</td>
							<td>
								
								0.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/86" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr86: La revue de direction prend en compte les modifications des enjeux externes et internes pertinents pour le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/84" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr84: La revue du SMSI est réalisée à des intervalles planifiés pour s&#x27;assurer de son efficacité et adéquation avec la stratégie de l&#x27;organisme </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/85" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr85: La revue de direction prend en compte l&#x27;état d&#x27;avancement des actions décidées à l&#x27;issue des revues de direction précédentes </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/87" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr87: La revue de direction prend en compte les retours sur les performances de sécurité de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/88" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr88: La revue de direction prend en compte les retours d&#x27;informations des parties intéressées </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/90" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr90: La revue de direction prend en compte les opportunités d&#x27;amélioration continue </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/89" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr89: La revue de direction prend en compte les résultats de l&#x27;appréciation des risques et l&#x27;état d&#x27;avancement du plan de traitement des risques </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/91" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr91: La revue de direction fournit des décisions et actions sur les opportunités d’amélioration, le besoin de modifier le SMSI et le besoin en ressources </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/92" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr92: Les éléments de sortie des revues de direction sont conservés sous forme d&#x27;informations documentées. </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
							<td class="w-50">Art 4: Contexte de l&#x27;organisme </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								23.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">4.2: Compréhension des besoins et des attentes des parties intéressées </td>
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
						<form action="/Exigences/Exigences/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr4: Les parties intéressées pertinentes sont identifiées dans la cadre du SMSI </td>
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
						<form action="/Exigences/Exigences/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr5: Les exigences  des parties intéressées ainsi que celles légales et réglementaires sont prises en considération dans le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
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
						<form action="/Exigences/Exigences/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">4.3: Détermination du domaine d&#x27;application du système de management de la sécurité de l&#x27;information </td>
							<td>
								
								Faux
								
							</td>
							<td>
								
								32.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr6: Le domaine d&#x27;application du SMSI est établi en déterminant ses limites et son applicabilité </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr7: Le domaine d&#x27;application du SMSI prend en compte les enjeux externes et internes auquel il est fait référence en 4.1 </td>
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
						<form action="/Exigences/Exigences/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr8: Le domaine d&#x27;application du SMSI prend en compte les exigences auquel il est fait référence en 4.1 et 4.2 </td>
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
						<form action="/Exigences/Exigences/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr9: Le domaine d&#x27;application du SMSI prend en compte les interfaces et les dépendances existantes entre les activités réalisées par l&#x27;organisation et celles réalisées par d&#x27;autres organisations </td>
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
						<form action="/Exigences/Exigences/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr10: Le domaine d&#x27;application doit être disponible sous forme d&#x27;information documentée </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">4.4: Système de Management de la Sécurité de l&#x27;Information </td>
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
						<form action="/Exigences/Exigences/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr11: Le SMSI est établi, mis en oeuvre, tenu à jour et amélioré en continu </td>
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
						<form action="/Exigences/Exigences/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">4.1: Compréhension de l&#x27;organisme et de son contexte </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								0.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="/Exigences/Exigences/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr2: Les informations relatives aux enjeux externes et internes sont surveillées et revues périodiquement </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="4XffN5ZK5ripJeFq3VELOz0miVwtOEXYYJAv6pd1khI9lMKKMhTmSiJB4yUSwRua">
							<td class="w-50">cr3: Les facteurs d&#x27;influence sur l&#x27;efficacité du Système de Management de la Sécurité de l&#x27;Information (SMSI) sont identifiés </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
							<td class="w-50">cr1: Les enjeux internes et externes sont déterminés relativement à la finalité et l&#x27;orientation stratégique de l&#x27;organisme </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

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
						<form action="/Exigences/Exigences/2" method="post">
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




