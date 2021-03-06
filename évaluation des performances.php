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
							<td class="w-50">Art9 √Čvaluation des performances </td>
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
							<td class="w-50">9.1: Surveillance, mesure, analyse et √©valuation </td>
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
							<td class="w-50">cr71: Les performances de s√©curit√© de l&#x27;information ainsi que l&#x27;efficacit√© du SMSI sont √©valu√©es </td>
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
							<td class="w-50">cr72: Ce qui est n√©cessaire de surveiller et de mesurer est d√©termin√© </td>
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
							<td class="w-50">cr73: Les m√©thodes de surveillance, de mesurage, d&#x27;analyse et d&#x27;√©valuation, pour assurer la validit√© des r√©sultats sont d√©termin√©es </td>
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
							<td class="w-50">cr74: L&#x27;organisme d√©termine quand la surveillance et les mesures doivent √™tre effectu√©es </td>
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
							<td class="w-50">cr75: L&#x27;organisme d√©termine qui doit effectuer la surveillance et les mesures </td>
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
							<td class="w-50">cr76: L&#x27;organisme d√©termine quand les r√©sulats de la surveillance et des mesures doivent-√™tre analys√©es et √©valu√©es </td>
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
							<td class="w-50">cr77: L&#x27;organisme d√©termine qui doit analyser et √©valuer les r√©sultats </td>
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
							<td class="w-50">cr78: Les informations document√©es appropri√©es comme preuves des r√©sultats de la surveillance et des mesures sont conserv√©es </td>
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
							<td class="w-50">cr79: Les audits internes sont planifi√©s, √©tablis et mis en Ňďuvre √† des intervalles d√©termin√©s </td>
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
							<td class="w-50">cr80: Les crit√®res et le p√©rim√®tre de chaque audit sont d√©finis </td>
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
							<td class="w-50">cr81: Les auditeurs sont s√©lectionn√©s en s&#x27;assurant de l&#x27;objectivit√© et de l&#x27;impartialit√© du processus d&#x27;audit. </td>
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
							<td class="w-50">cr82: Les r√©sultats des audits sont communiqu√©s √† la direction concern√©e </td>
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
							<td class="w-50">cr83: Des informations document√©es sont conserv√©es comme preuves de la mise en Ňďuvre du programme d&#x27;audit et  de ses r√©sultats. </td>
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
							<td class="w-50">cr84: La revue du SMSI est r√©alis√©e √† des intervalles planifi√©s pour s&#x27;assurer de son efficacit√© et ad√©quation avec la strat√©gie de l&#x27;organisme </td>
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
							<td class="w-50">cr85: La revue de direction prend en compte l&#x27;√©tat d&#x27;avancement des actions d√©cid√©es √† l&#x27;issue des revues de direction pr√©c√©dentes </td>
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
							<td class="w-50">cr87: La revue de direction prend en compte les retours sur les performances de s√©curit√© de l&#x27;information </td>
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
							<td class="w-50">cr88: La revue de direction prend en compte les retours d&#x27;informations des parties int√©ress√©es </td>
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
							<td class="w-50">cr90: La revue de direction prend en compte les opportunit√©s d&#x27;am√©lioration continue </td>
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
							<td class="w-50">cr89: La revue de direction prend en compte les r√©sultats de l&#x27;appr√©ciation des risques et l&#x27;√©tat d&#x27;avancement du plan de traitement des risques </td>
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
							<td class="w-50">cr91: La revue de direction fournit des d√©cisions et actions sur les opportunit√©s d‚Äôam√©lioration, le besoin de modifier le SMSI et le besoin en ressources </td>
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
							<td class="w-50">cr92: Les √©l√©ments de sortie des revues de direction sont conserv√©s sous forme d&#x27;informations document√©es. </td>
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
							<td class="w-50">Art 10: Am√©lioration </td>
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
							<td class="w-50">10.1: Non-conformit√© et action corrective </td>
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
							<td class="w-50">cr 93: L‚Äôorganisme r√©agit √† chaque non-conformit√© pour la corriger, la ma√ģtriser et prendre en charge les cons√©quences </td>
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
							<td class="w-50">cr94: L‚Äôorganisme √©value la n√©cessit√© de traiter les causes des non-conformit√©s </td>
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
							<td class="w-50">cr95: L‚Äôorganisme met en Ňďuvre toutes les actions correctives requises </td>
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
							<td class="w-50">cr96: L&#x27;organisation r√©vise l&#x27;efficacit√© de toute action corrective mise en Ňďuvre </td>
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
							<td class="w-50">cr97: L&#x27;organisme modifie, si n√©cessaire, le SMSI </td>
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
							<td class="w-50">cr98: Les actions correctives sont √† la mesure des effets des non-conformit√©s </td>
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
							<td class="w-50">cr99: L&#x27;organisation doit conserver des informations document√©es comme preuves de la nature des non-conformit√©s et de toute action subs√©quente et des r√©sultats de toute action corrective </td>
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
							<td class="w-50">10.2:  Am√©lioration continue </td>
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
							<td class="w-50">cr100 L‚Äôorganisme s‚Äôengage √† am√©liorer en continu la pertinence, l&#x27;ad√©quation et la performance du SMSI </td>
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
							<td class="w-50">4.2: Compr√©hension des besoins et des attentes des parties int√©ress√©es </td>
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
							<td class="w-50">cr4: Les parties int√©ress√©es pertinentes sont identifi√©es dans la cadre du SMSI </td>
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
							<td class="w-50">cr5: Les exigences  des parties int√©ress√©es ainsi que celles l√©gales et r√©glementaires sont prises en consid√©ration dans le SMSI </td>
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
							<td class="w-50">4.3: D√©termination du domaine d&#x27;application du syst√®me de management de la s√©curit√© de l&#x27;information </td>
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
							<td class="w-50">cr6: Le domaine d&#x27;application du SMSI est √©tabli en d√©terminant ses limites et son applicabilit√© </td>
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
							<td class="w-50">cr7: Le domaine d&#x27;application du SMSI prend en compte les enjeux externes et internes auquel il est fait r√©f√©rence en 4.1 </td>
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
							<td class="w-50">cr8: Le domaine d&#x27;application du SMSI prend en compte les exigences auquel il est fait r√©f√©rence en 4.1 et 4.2 </td>
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
							<td class="w-50">cr9: Le domaine d&#x27;application du SMSI prend en compte les interfaces et les d√©pendances existantes entre les activit√©s r√©alis√©es par l&#x27;organisation et celles r√©alis√©es par d&#x27;autres organisations </td>
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
							<td class="w-50">cr10: Le domaine d&#x27;application doit √™tre disponible sous forme d&#x27;information document√©e </td>
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
							<td class="w-50">4.4: Syst√®me de Management de la S√©curit√© de l&#x27;Information </td>
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
							<td class="w-50">cr11: Le SMSI est √©tabli, mis en oeuvre, tenu √† jour et am√©lior√© en continu </td>
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
							<td class="w-50">4.1: Compr√©hension de l&#x27;organisme et de son contexte </td>
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
							<td class="w-50">cr2: Les informations relatives aux enjeux externes et internes sont surveill√©es et revues p√©riodiquement </td>
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
							<td class="w-50">cr3: Les facteurs d&#x27;influence sur l&#x27;efficacit√© du Syst√®me de Management de la S√©curit√© de l&#x27;Information (SMSI) sont identifi√©s </td>
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
							<td class="w-50">cr1: Les enjeux internes et externes sont d√©termin√©s relativement √† la finalit√© et l&#x27;orientation strat√©gique de l&#x27;organisme </td>
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




