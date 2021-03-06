<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Right Sidebar template - Progressus Bootstrap template</title>

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


<!--navbar-->

<nav class="navbar navbar-dark navbar-expand-lg fixed-top p-0 m-0" id="nav-bar">
    <v-toolbar dark data-app>
        <v-app-bar-nav-icon>
          <p>bonj-</p>
         
        </v-app-bar-nav-icon>
        <v-spacer></v-spacer>
        <v-toolbar-items>
            <v-btn text class="nav-link" href="/">Mode d'emploi</v-btn>
            <v-menu open-on-hover offset-y rounded="0">
              <template v-slot:activator="{ on, attrs}">
                <v-btn text dark v-bind="attrs" v-on="on">
                   OUTIL D'AUTODIAGNOSTIC 1
                </v-btn>
              </template>
              <v-list dark>
                <v-list-item class="nav-link" href="/Exigences/Exigences/">Exigences</v-list-item>
                <v-list-item class="nav-link" href="/Mesures_Annexe_A/Mesures_Annexe_A/">Mesures de l'Annexe A</v-list-item>
                <v-list-item class="nav-link" href="/Resultats_Globaux/Resultats_Globaux">R??sultats Globaux</v-list-item>
                <v-list-item class="nav-link" href="/Resultats_par_Article/Resultats_par_Article">R??sultats par Article</v-list-item>
                <v-list-item class="nav-link" href="/Resultats_Annexe_A/Resultats_Annexe_A">R??sultats de l'Annexe A</v-list-item>
                <v-list-item class="nav-link" href="/Conseils/Conseils">Conseils</v-list-item>

              </v-list>
            </v-menu>

            <v-menu open-on-hover offset-y rounded="0">
              <template v-slot:activator="{ on, attrs}">
                <v-btn text dark v-bind="attrs" v-on="on">
                   OUTIL D'AUTODIAGNOSTIC 2
                </v-btn>
              </template>
              <v-list dark>
                <v-list-item class="nav-link" href="/Diagnostic2/Diagnostic2/">Diagnostic 2</v-list-item>
                <v-list-item class="nav-link" href="/Resultats_Diagnostic2/Resultats_Diagnostic2">Resultats Diagnostic2</v-list-item>
              </v-list>
            </v-menu>

            <v-menu open-on-hover offset-y rounded="0">
              <template v-slot:activator="{ on, attrs}">
                <v-btn text dark v-bind="attrs" v-on="on">
                   OUTIL D'AUTODIAGNOSTIC 3: MATURITE
                </v-btn>
              </template>
              <v-list dark>
                <v-list-item class="nav-link" href="/Maturite/Maturite/">Maturite</v-list-item>
                <v-list-item class="nav-link" href="/Resultats_audit_de_Maturite/Resultats_audit_de_Maturite">Resultats_audit_de_Maturite</v-list-item>
              </v-list>
            </v-menu>


            <v-btn text class="nav-link"  href="/cartographie/cartographie">
                Cartographie

            </v-btn>

            <v-btn text class="nav-link" href="/compte/quitter">Quitter</v-btn>
        </v-toolbar-items>
    </v-toolbar>
  </nav>
<!--navbar-->
<b>


		<div style="background-color:wheat">

			<h5> <b> <u>OBJECTIFS:</u> </b> </h5>
			<br>
			Cet outil permet aux diff??rents utilisateurs, et en particulier aux directeurs des syst??mes d'informations,
		d'??valuer la conformit?? de leur syst??me de management de la s??curit?? de l'information selon les exigences de
		la norme ISO 27001:2013; il permet aussi de visualiser la cartographie de l'ensemble des processus de l'entreprise. Il sert aussi de tableau de bord pour votre syst??me d'informations avec lequel vous pouvez commenter
		et ??valuer la progression de votre SMSI. Ainsi, il vous donnera plus de visibilit?? afin d'??laborer des actionsd'am??lioration continue. <br>
		 <FONT color="red">(NB : Cet outil ne garantit pas une certification) </FONT>

		<br>

		<div class="red">
			<div class="col-md">
					<hr>
					<h1>
						<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:Yellow " > <b>MODE D'EMPLOI POUR OUTIL D'AUTODIAGNOSTIC I</b> </a>
					</h1>
			</div>
		</div>


			<h5> <b> <u>PRESENTATION DES ELEMENTS:</u> </b> </h5>

			<ol>
				<li>EXIGENCES <ul> Des crit??res d'??valuation par article et sous article sont d??finis</ul>
					<ul> Des commentaires explicitent les crit??res aux utilisateur </ul>
				</li>
				<li>MESURES DE L'ANNEXE A <ul>Des crit??res d'??valuation par articles et sous article sont d??finis </ul>
					<ul> Des commentaires explicitent les crit??res aux utilisateur</ul>
					<ul> Des conseils de bonnes pratiques pour r??aliser les mesures de l'annexe</ul>
				</li>
				<li>RESULTATS GLOBAUX <ul>Tous les r??sultats sont r??unis sur cet onglet avec une cartographie globale du SMSI </ul></li>
				<li>RESULTATS PAR ARTICLE <ul>Taux de CONFORMIT?? sous forme radar </ul>
				</li>
				<li>RESULTATS DE L'ANNEXE A <ul>Tous les r??sultats sont r??unis sur cet onglet avec une cartographie globale des bonnes pratiques de l'annexe A </ul>
				</li>
				<li>CONSEILS <ul>  Expliquent globalement l'objet de chaque article de la norme </ul>
				</li>
		</ol>
		<br>

		<b>Param??trage des affectations selon le N?? du choix Utilis?? pour  {Exigences} : affectation d'un N?? selon le choix r??alis??</b>
		<table border=4 cellspacing=4 cellpadding=4 width=80%>
			 <tr>
			   <td><b>choix de v??racit??</b></td>
			   <td>Faux</td>
				<td>Plut??t Faux</td>
				<td>Plut??t Vrai</td>
				<td>vrai</td>
		   </tr>
		   <tr>
			   <td><b> num??ro de la v??racit?? </b></td>
			   <td>1</td>
			   <td>2</td>
			   <td>3</td>
			   <td>4</td>
		   </tr>
		</table>
		<br>

		<table border=4 cellspacing=4 cellpadding=4 width=80%>
		   <tr>
			   <td style="background-color:Lime"; colspan="3">Niveaux de <b>V??RACIT??</b> quant ?? la <b>R??ALISATION</b>
		des actions associ??es aux exigences de la norme</td>
			   <td style="background-color:Silver"; colspan="4"> <b>LIBELL??S</b> des niveaux de <b>CONFORMIT??</b>  des <b>ARTICLES</b> de la norme</td>
		   <tr>
			   <td style="background-color:Lime"> Libell??s explicites des <b>niveaux de V??RACITE</b> </td>
			   <td style="background-color:Lime">Choix de V??RACIT??</td>
			   <td style="background-color:Lime">Taux de V??RACIT??</td>
				<td style="background-color:Silver">Taux moyen Minimal</td>
				<td style="background-color:Silver">Taux moyen Maximal</td>
				<td style="background-color:Silver">Niveaux de CONFORMIT??</td>
				<td style="background-color:Silver">Libell??s explicites des niveaux de CONFORMIT??</td>
		   </tr>
		   <tr>
			   <td style="background-color:Lime">Niveau 1 : L'action <FONT color="red"> n'est pas r??alis??e </FONT> ou alors de mani??re tr??s al??atoire.</td>
			   <td style="background-color:Lime">Faux</td>
			   <td style="background-color:Lime">0%</td>
			   <td>0%</td>
			   <td style="background-color:Silver">9%</td>
			   <td style="background-color:Silver">Insuffisant</td>
			   <td style="background-color:Silver">Conformit?? de niveau 1 : Il est n??cessaire de <FONT color="red"> formaliser  </FONT> les activit??s r??alis??es.</td>
		   </tr>
		   <tr>
			   <td style="background-color:Lime">Niveau 2 : L'action est <FONT color="red"> r??alis??e quelques fois </FONT>  de mani??re <FONT color="red"> informelle. </FONT> </td>
			   <td style="background-color:Lime">Plut??t Faux</td>
			   <td style="background-color:Lime">30%</td>
			   <td>10%</td>
			   <td style="background-color:Silver">49%</td>
			   <td style="background-color:Silver">Informel</td>
			   <td style="background-color:Silver">Conformit?? de niveau 2 : Il est n??cessaire de <FONT color="red"> p??renniser la bonne ex??cution </FONT>  des activit??s.</td>
			<tr>
			   <td style="background-color:Lime"> Niveau 3 : L'action est <FONT color="red"> formalis??e  </FONT>et <FONT color="red"> r??alis??e. </FONT> </td>
			   <td style="background-color:Lime"> Plut??t Vrai</td>
			   <td style="background-color:Lime">70%</td>
			   <td>50%</td>
			   <td style="background-color:Silver">89%</td>
			   <td style="background-color:Silver">Convaincant</td>
			   <td style="background-color:Silver">Conformit?? de niveau 3 : Il est n??cessaire de <FONT color="red"> tracer et d'am??liorer </FONT>  les activit??s.</td>
		   </tr>
			<tr>
			   <td style="background-color:Lime">Niveau 4 : L'action est <FONT color="red"> formalis??e, r??alis??e, trac??e  </FONT> et <FONT color="red"> am??lior??e. </FONT> </td>
			   <td style="background-color:Lime">Vrai</td>
			   <td style="background-color:Lime">100%</td>
			   <td>90%</td>
			   <td style="background-color:Silver">100%</td>
			   <td style="background-color:Silver">Conforme</td>
			   <td style="background-color:Silver">Conformit?? de niveau 4 : <FONT color="red"> BRAVO ! </FONT>  Maintenez et <FONT color="red"> communiquez vos r??sultats. </FONT></td>
		   </tr>
		</table>




		<div class="red">
			<div class="col-md">
					<hr>
					<h1>
						<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:red " > <b>MODE D'EMPLOI POUR OUTIL D'AUTODIAGNOSTIC 2</b> </a>
					</h1>
			</div>
		</div>


			<br>
			Dans cette fonctionnalit??, nous avons un questionnnaire de 152 questions reformul??es selon l'ISO 27001:2013.
			<br>
			La r??ponse aux questions de l'audit se fait juste par OUI ou NON <br>
			Ensuite, nous avons une partie pour LES JUSTIFICATIONS OU COMMENTAIRES<br>
			Une fois l'audi termin??, nous proc??dons ?? la r??colte des r??sultats de l'audit qui s'affichent sous forme graphique<br>
			Et enfin une d??cision d'aide



		<div class="green">
			<div class="col-md">
					<hr>
					<h1>
						<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:Olive " > <b>MODE D'EMPLOI POUR OUTIL D'AUTODIAGNOSTIC 3: Audit de MATURITE</b> </a>
					</h1>
			</div>
		</div>


			<br>
			Dans cette fonctionnalit??, nous avons un questionnnaire de 30 questions reformul??es selon l'ISO 27001:2013.
			<br>
			La r??ponse aux questions de l'audit se fait juste par 05 niveaux de maturit??: <b> 1-CYBER HYGIENE
		 DE BASE; 2-CYBER HYGIENE INTERMEDIAIRE; 3- BONNE CYBER HYGIENE; 4-LE SYST??ME EST PROACTIF; 5-LE SYST??ME EST AVANCE / PROGRESSIF:  bravo!! les actions sont optimis??es.</b>

		 <br>
			Ensuite, nous avons une partie pour LES JUSTIFICATIONS OU COMMENTAIRES<br>
			Une fois l'audi termin??, nous proc??dons ?? la r??colte des r??sultats de l'audit qui s'affichent sous forme graphique<br>
			Et enfin une d??cision d'aide




		<h1><b> PRINCIPE DE LA PRISE DE DECISION: </b>	</h1>

		<table border=4 cellspacing=4 cellpadding=4 width=80% style="background-color:Aqua " >
			 <tr>
			   <td><b></b></td>
			   <td><b>OUTIL 1: EXIGENCES (400PTS)</b> </td>
				<td><b>OUTIL 1: ANNEXE A (456PTS) </b></td>
				<td><b>OUTIL 2 (152 PTS)</b> </td>
				<td><b>OUTIL 3 (150PTS): CMMC</b> </td>
		   </tr>
		   <tr>
			   <td><b> NIVEAU 1: INSUFFISANT:</b> les actions ne sont pas r??alis??es, ou alors elles sont r??alis??es de mani??re tr??s al??atoire. Il est donc n??cessaire de formaliser les actions r??alis??es </td>
			   <td>[0, 100]</td>
			   <td>[0, 114]</td>
			   <td>[0, 38]</td>
			   <td>[0, 30]: CYBER HYGIENE DE BASE</td>
		   </tr>
			<tr>
			   <td><b> NIVEAU 2: INFORMEL:</b> les actions sont r??alis??es quelques fois et de mani??re informelles. Il est donc n??cessaire de p??renniser la bonne ex??cution des activit??s</td>
			   <td>]100, 200]</td>
			   <td>]114, 228]</td>
			   <td>]38, 76]</td>
			   <td>]30, 60]: CYBER HYGIENE DE BASE</td>
		   </tr>
			<tr>
			   <td><b>NIVEAU 3: CONVAINCANT:</b> les actions sont r??alis??es et formalis??es. Il est donc n??cessaire de tracer et d???am??liorer les activit??s au sein de votre entreprise.</td>
			   <td>]200, 300]</td>
			   <td>]228, 342]</td>
			   <td>]38, 76]</td>
			   <td>]60, 90]: CYBER HYGIENE DE BASE</td>
		   </tr>

			<tr>
			   <td><b>NIVEAU 4: est CONFORME:</b>  les actions sont formalis??es, trac??es, et am??lior??es. BRAVOO!!! Maintenez et communiquez vos r??sultats.</td>
			   <td>]300, 400]</td>
			   <td>]342, 3456]</td>
			   <td>]76, 152]</td>
			   <td>]30, 120]: CYBER HYGIENE DE BASE</td>
		   </tr>

			<tr>
			   <td><b>NIVEAU 4: est CONFORME:</b>  les actions sont formalis??es, trac??es, et am??lior??es. BRAVOO!!! Maintenez et communiquez vos r??sultats.</td>
			   <td>]300, 400]</td>
			   <td>]342, 3456]</td>
			   <td>]76, 152]</td>
			   <td>]30, 120]: CYBER HYGIENE DE BASE</td>
		   </tr>

			<tr>
			   <td><b>NIVEAU 5: la d??cision est la suivante: LE SYST??ME EST AVANCE / PROGRESSIF: </b> bravo!! les actions sont optimis??es.</td>
			   <td></td>
			   <td></td>
			   <td></td>
			   <td>]30, 120]: CYBER HYGIENE DE BASE</td>
		   </tr>
		</table>
		</div>
		</b>
		

	<!-- Footer -->
	<?php include_once("footer.php"); ?>
	<!-- /.Footer -->
	
	<script src="/static/js/vue.js"></script>
	<script src="/static/js/vuetify.js"></script>
	<script>
		new Vue({
		  el: '#nav-bar',
		  vuetify: new Vuetify(),
		})
	</script>
			

</body>
</html>
