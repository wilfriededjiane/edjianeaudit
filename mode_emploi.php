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


</head>
<body>
	<!-- Fixed navbar -->
	<?php include_once("header.php"); ?>
	<!-- /.navbar -->


	<nav class="navbar navbar-dark navbar-expand-lg fixed-top p-0 m-0" id="nav-bar">
    <v-toolbar dark data-app>
        <v-app-bar-nav-icon>
          <p>bonj-</p>
          <img src="/static/images/nexttellogo.png" width="75" height="50">
          <img src="/static/images/Logo ENSP.png" width="50" height="50">
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
                <v-list-item class="nav-link" href="/Resultats_Globaux/Resultats_Globaux">Résultats Globaux</v-list-item>
                <v-list-item class="nav-link" href="/Resultats_par_Article/Resultats_par_Article">Résultats par Article</v-list-item>
                <v-list-item class="nav-link" href="/Resultats_Annexe_A/Resultats_Annexe_A">Résultats de l'Annexe A</v-list-item>
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
			Cet outil permet aux différents utilisateurs, et en particulier aux directeurs des systèmes d'informations,
		d'évaluer la conformité de leur système de management de la sécurité de l'information selon les exigences de
		la norme ISO 27001:2013; il permet aussi de visualiser la cartographie de l'ensemble des processus de l'entreprise. Il sert aussi de tableau de bord pour votre système d'informations avec lequel vous pouvez commenter
		et évaluer la progression de votre SMSI. Ainsi, il vous donnera plus de visibilité afin d'élaborer des actionsd'amélioration continue. <br>
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
				<li>EXIGENCES <ul> Des critères d'évaluation par article et sous article sont définis</ul>
					<ul> Des commentaires explicitent les critères aux utilisateur </ul>
				</li>
				<li>MESURES DE L'ANNEXE A <ul>Des critères d'évaluation par articles et sous article sont définis </ul>
					<ul> Des commentaires explicitent les critères aux utilisateur</ul>
					<ul> Des conseils de bonnes pratiques pour réaliser les mesures de l'annexe</ul>
				</li>
				<li>RESULTATS GLOBAUX <ul>Tous les résultats sont réunis sur cet onglet avec une cartographie globale du SMSI </ul></li>
				<li>RESULTATS PAR ARTICLE <ul>Taux de CONFORMITÉ sous forme radar </ul>
				</li>
				<li>RESULTATS DE L'ANNEXE A <ul>Tous les résultats sont réunis sur cet onglet avec une cartographie globale des bonnes pratiques de l'annexe A </ul>
				</li>
				<li>CONSEILS <ul>  Expliquent globalement l'objet de chaque article de la norme </ul>
				</li>
		</ol>
		<br>

		<b>Paramétrage des affectations selon le N° du choix Utilisé pour  {Exigences} : affectation d'un N° selon le choix réalisé</b>
		<table border=4 cellspacing=4 cellpadding=4 width=80%>
			 <tr>
			   <td><b>choix de véracité</b></td>
			   <td>Faux</td>
				<td>Plutôt Faux</td>
				<td>Plutôt Vrai</td>
				<td>vrai</td>
		   </tr>
		   <tr>
			   <td><b> numéro de la véracité </b></td>
			   <td>1</td>
			   <td>2</td>
			   <td>3</td>
			   <td>4</td>
		   </tr>
		</table>
		<br>

		<table border=4 cellspacing=4 cellpadding=4 width=80%>
		   <tr>
			   <td style="background-color:Lime"; colspan="3">Niveaux de <b>VÉRACITÉ</b> quant à la <b>RÉALISATION</b>
		des actions associées aux exigences de la norme</td>
			   <td style="background-color:Silver"; colspan="4"> <b>LIBELLÉS</b> des niveaux de <b>CONFORMITÉ</b>  des <b>ARTICLES</b> de la norme</td>
		   <tr>
			   <td style="background-color:Lime"> Libellés explicites des <b>niveaux de VÉRACITE</b> </td>
			   <td style="background-color:Lime">Choix de VÉRACITÉ</td>
			   <td style="background-color:Lime">Taux de VÉRACITÉ</td>
				<td style="background-color:Silver">Taux moyen Minimal</td>
				<td style="background-color:Silver">Taux moyen Maximal</td>
				<td style="background-color:Silver">Niveaux de CONFORMITÉ</td>
				<td style="background-color:Silver">Libellés explicites des niveaux de CONFORMITÉ</td>
		   </tr>
		   <tr>
			   <td style="background-color:Lime">Niveau 1 : L'action <FONT color="red"> n'est pas réalisée </FONT> ou alors de manière très aléatoire.</td>
			   <td style="background-color:Lime">Faux</td>
			   <td style="background-color:Lime">0%</td>
			   <td>0%</td>
			   <td style="background-color:Silver">9%</td>
			   <td style="background-color:Silver">Insuffisant</td>
			   <td style="background-color:Silver">Conformité de niveau 1 : Il est nécessaire de <FONT color="red"> formaliser  </FONT> les activités réalisées.</td>
		   </tr>
		   <tr>
			   <td style="background-color:Lime">Niveau 2 : L'action est <FONT color="red"> réalisée quelques fois </FONT>  de manière <FONT color="red"> informelle. </FONT> </td>
			   <td style="background-color:Lime">Plutôt Faux</td>
			   <td style="background-color:Lime">30%</td>
			   <td>10%</td>
			   <td style="background-color:Silver">49%</td>
			   <td style="background-color:Silver">Informel</td>
			   <td style="background-color:Silver">Conformité de niveau 2 : Il est nécessaire de <FONT color="red"> pérenniser la bonne exécution </FONT>  des activités.</td>
			<tr>
			   <td style="background-color:Lime"> Niveau 3 : L'action est <FONT color="red"> formalisée  </FONT>et <FONT color="red"> réalisée. </FONT> </td>
			   <td style="background-color:Lime"> Plutôt Vrai</td>
			   <td style="background-color:Lime">70%</td>
			   <td>50%</td>
			   <td style="background-color:Silver">89%</td>
			   <td style="background-color:Silver">Convaincant</td>
			   <td style="background-color:Silver">Conformité de niveau 3 : Il est nécessaire de <FONT color="red"> tracer et d'améliorer </FONT>  les activités.</td>
		   </tr>
			<tr>
			   <td style="background-color:Lime">Niveau 4 : L'action est <FONT color="red"> formalisée, réalisée, tracée  </FONT> et <FONT color="red"> améliorée. </FONT> </td>
			   <td style="background-color:Lime">Vrai</td>
			   <td style="background-color:Lime">100%</td>
			   <td>90%</td>
			   <td style="background-color:Silver">100%</td>
			   <td style="background-color:Silver">Conforme</td>
			   <td style="background-color:Silver">Conformité de niveau 4 : <FONT color="red"> BRAVO ! </FONT>  Maintenez et <FONT color="red"> communiquez vos résultats. </FONT></td>
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
			Dans cette fonctionnalité, nous avons un questionnnaire de 152 questions reformulées selon l'ISO 27001:2013.
			<br>
			La réponse aux questions de l'audit se fait juste par OUI ou NON <br>
			Ensuite, nous avons une partie pour LES JUSTIFICATIONS OU COMMENTAIRES<br>
			Une fois l'audi terminé, nous procédons à la récolte des résultats de l'audit qui s'affichent sous forme graphique<br>
			Et enfin une décision d'aide



		<div class="green">
			<div class="col-md">
					<hr>
					<h1>
						<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:Olive " > <b>MODE D'EMPLOI POUR OUTIL D'AUTODIAGNOSTIC 3: Audit de MATURITE</b> </a>
					</h1>
			</div>
		</div>


			<br>
			Dans cette fonctionnalité, nous avons un questionnnaire de 30 questions reformulées selon l'ISO 27001:2013.
			<br>
			La réponse aux questions de l'audit se fait juste par 05 niveaux de maturité: <b> 1-CYBER HYGIENE
		 DE BASE; 2-CYBER HYGIENE INTERMEDIAIRE; 3- BONNE CYBER HYGIENE; 4-LE SYSTÈME EST PROACTIF; 5-LE SYSTÈME EST AVANCE / PROGRESSIF:  bravo!! les actions sont optimisées.</b>

		 <br>
			Ensuite, nous avons une partie pour LES JUSTIFICATIONS OU COMMENTAIRES<br>
			Une fois l'audi terminé, nous procédons à la récolte des résultats de l'audit qui s'affichent sous forme graphique<br>
			Et enfin une décision d'aide




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
			   <td><b> NIVEAU 1: INSUFFISANT:</b> les actions ne sont pas réalisées, ou alors elles sont réalisées de manière très aléatoire. Il est donc nécessaire de formaliser les actions réalisées </td>
			   <td>[0, 100]</td>
			   <td>[0, 114]</td>
			   <td>[0, 38]</td>
			   <td>[0, 30]: CYBER HYGIENE DE BASE</td>
		   </tr>
			<tr>
			   <td><b> NIVEAU 2: INFORMEL:</b> les actions sont réalisées quelques fois et de manière informelles. Il est donc nécessaire de pérenniser la bonne exécution des activités</td>
			   <td>]100, 200]</td>
			   <td>]114, 228]</td>
			   <td>]38, 76]</td>
			   <td>]30, 60]: CYBER HYGIENE DE BASE</td>
		   </tr>
			<tr>
			   <td><b>NIVEAU 3: CONVAINCANT:</b> les actions sont réalisées et formalisées. Il est donc nécessaire de tracer et d’améliorer les activités au sein de votre entreprise.</td>
			   <td>]200, 300]</td>
			   <td>]228, 342]</td>
			   <td>]38, 76]</td>
			   <td>]60, 90]: CYBER HYGIENE DE BASE</td>
		   </tr>

			<tr>
			   <td><b>NIVEAU 4: est CONFORME:</b>  les actions sont formalisées, tracées, et améliorées. BRAVOO!!! Maintenez et communiquez vos résultats.</td>
			   <td>]300, 400]</td>
			   <td>]342, 3456]</td>
			   <td>]76, 152]</td>
			   <td>]30, 120]: CYBER HYGIENE DE BASE</td>
		   </tr>

			<tr>
			   <td><b>NIVEAU 4: est CONFORME:</b>  les actions sont formalisées, tracées, et améliorées. BRAVOO!!! Maintenez et communiquez vos résultats.</td>
			   <td>]300, 400]</td>
			   <td>]342, 3456]</td>
			   <td>]76, 152]</td>
			   <td>]30, 120]: CYBER HYGIENE DE BASE</td>
		   </tr>

			<tr>
			   <td><b>NIVEAU 5: la décision est la suivante: LE SYSTÈME EST AVANCE / PROGRESSIF: </b> bravo!! les actions sont optimisées.</td>
			   <td></td>
			   <td></td>
			   <td></td>
			   <td>]30, 120]: CYBER HYGIENE DE BASE</td>
		   </tr>
		</table>
		</div>
		</b>
		</b>



	<!-- Footer -->
	<?php include_once("footer.php"); ?>
	<!-- /.footer -->


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>

</body>
</html>
