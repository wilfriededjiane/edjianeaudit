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
							<td class="w-50">4.2: Compr??hension des besoins et des attentes des parties int??ress??es </td>
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
							<td class="w-50">cr4: Les parties int??ress??es pertinentes sont identifi??es dans la cadre du SMSI </td>
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
							<td class="w-50">cr5: Les exigences  des parties int??ress??es ainsi que celles l??gales et r??glementaires sont prises en consid??ration dans le SMSI </td>
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
							<td class="w-50">4.3: D??termination du domaine d&#x27;application du syst??me de management de la s??curit?? de l&#x27;information </td>
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
							<td class="w-50">cr6: Le domaine d&#x27;application du SMSI est ??tabli en d??terminant ses limites et son applicabilit?? </td>
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
							<td class="w-50">cr7: Le domaine d&#x27;application du SMSI prend en compte les enjeux externes et internes auquel il est fait r??f??rence en 4.1 </td>
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
							<td class="w-50">cr8: Le domaine d&#x27;application du SMSI prend en compte les exigences auquel il est fait r??f??rence en 4.1 et 4.2 </td>
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
							<td class="w-50">cr9: Le domaine d&#x27;application du SMSI prend en compte les interfaces et les d??pendances existantes entre les activit??s r??alis??es par l&#x27;organisation et celles r??alis??es par d&#x27;autres organisations </td>
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
							<td class="w-50">cr10: Le domaine d&#x27;application doit ??tre disponible sous forme d&#x27;information document??e </td>
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
							<td class="w-50">4.4: Syst??me de Management de la S??curit?? de l&#x27;Information </td>
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
							<td class="w-50">cr11: Le SMSI est ??tabli, mis en oeuvre, tenu ?? jour et am??lior?? en continu </td>
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
							<td class="w-50">4.1: Compr??hension de l&#x27;organisme et de son contexte </td>
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
							<td class="w-50">cr2: Les informations relatives aux enjeux externes et internes sont surveill??es et revues p??riodiquement </td>
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
							<td class="w-50">cr3: Les facteurs d&#x27;influence sur l&#x27;efficacit?? du Syst??me de Management de la S??curit?? de l&#x27;Information (SMSI) sont identifi??s </td>
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
							<td class="w-50">cr1: Les enjeux internes et externes sont d??termin??s relativement ?? la finalit?? et l&#x27;orientation strat??gique de l&#x27;organisme </td>
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




