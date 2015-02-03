<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>

	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">
	<meta content="text/html; charset=ISO-8859-15">
	<meta http-equiv="content-language" content="fr">
	<meta name="KEYWORDS" lang="fr" content="gratuit,quiz,quizz,multijoueurs,jeu,jeux,illimité,live" >
	<meta name="robots" content="index,follow">
	<meta name="DESCRIPTION" content="Site de jeu de quiz et cash, gratuit illimité. Live et tournois organisés à  partir de 18h.">
	<meta name="Copyright" content="Association letsquizagain">
	<meta name="Distributor" content="Global">
	<meta name="Rating" content="General">

    <title>LetsQuizAgain</title>
    <style type="text/css">
    		div.base { 
			margin-left: auto; 
			margin-right: auto ; 
			width:1100px; height:600px ;
			background-image:url('./images/index_reduit.jpg');
    			}
		form.centre{ 
			background-image:url('./images/logo.png');
			background-repeat:no-repeat;
			background-position:5% 5%;
			margin-left: auto; 
			margin-right: auto ; 
			position:relative; 
			top:15%; 
			background-color:#E8E8E8;
			text-indent:0px;
			color:#555555;
			font-family:Courier New;
			font-size:15px;
			font-weight:bold;
			font-style:normal;
			line-height:15px;
			text-decoration:none;
			text-align:center;
			text-shadow:1px 1px 1px #ffffff;

			}
		h2.form_centre{text-align:center; line-height:40px;
			}
		div.form_centre{text-align:center;
			}
		.input_form_centre {
			box-shadow:inset 0px 1px 0px 0px #ffffff;
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
			background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
			background-color:#ededed;
			border-bottom-right-radius:10px;
			text-indent:0px;
			display:inline-block;
			height:24px;
			}
		.input_form_centre:hover {
			background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
			background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
			background-color:#dfdfdf;
			}
		.input_form_centre:active {
			position:relative;
			top:1px;
			}
		hr.form_centre{width: 90%; height:6px;
			}
		
		a.form_centre:link{
			text-indent:0px;
			color:#555555;
			font-family:Courier New;
			font-size:12px;
			font-weight:bold;
			font-style:normal;
			text-decoration:none;
			text-align:center;
			text-shadow:3px 3px 3px #ffffff;
			box-shadow: 1px 1px 0px #888888;
			}
		table.form_centre{
			margin-left: auto;
			margin-right: auto ; 
			padding:10px;
			}
  </style>
    <?php 
		include './java/appel_ajax.js';
		include './java/cookies.js';
	?>
    <script type="text/javascript" charset="iso-8859-15"> 
			var page_suivante="./garde.php"; // la suite


 			function submitForm_identification(element)
				{      
     			var fichier="./php/ajax-letsquiz_identification_new.php";
     			var data="pseudo="+encodeURIComponent(document.getElementById("pseudo").value);
    			data=data+"&pwd="+encodeURIComponent(document.getElementById("pwd").value);
     			submitForm_cb(fichier,data,submitForm_identification_suite);
				}
 			function submitForm_identification_suite(cook)
				{ 
				var text_id=cook.split("&_&");
				if (text_id[0]=="erreur"){
						alert ( text_id[1]);
					}
				else{
						document.cookie=text_id[1];
						if ( document.cookie=="") {
						var text_cook=text_id[1].split("&.&");
						var user=text_cook[0].split("=");
						alert ( "\n\n Bonjour "+ user[1] + ", ton compte est bien créé, \n Hélas ton navigateur refuse les cookies pour LetQuizAgain, inutile de créer un autre compte.\n Il faut modifier les options de ton navigateur, à  bientôt.");
						return;
						}
						location.href=page_suivante;
					}
     }
</script>
  </head>
  <body>
    <div class="base">
      <!-- Au debut du doc  -->
      <!-- les buffer  -->
      <div style="position:absolute;left:0%;top:0%;width:0px;height:0px">
        <input id="buff_2"
          style="position:absolute;left:0%;top:0%;width:0px;height:0px">
        <input id="buff_3"
          style="position:absolute;left:0%;top:0%;width:0px;height:0px">
      </div>
      <!-- le formulaire  -->
      <form class="centre" name="ajax" method="POST" action=""
        style="width:527px;"><br><br><br>
        <h2 class="form_centre"> Identification </h2>
        <div class="form_centre"> Pseudonyme: <input id="pseudo"
            style="width:120px;"></div>
        <br>
        <div class="form_centre">Mot de passe: <input id="pwd"
            style="width:120px;" type="password"></div>
        <br>
        <input class="input_form_centre" id="ok_b" value=" Connexion !
          " type="button"> <br>
        <hr class="form_centre">
        <table class="form_centre" cellspacing="10">
          <tbody>
            <tr>
              <td style="vertical-align: top;"> <a href="inscription.php"
                  class="form_centre">Créer un pseudo</a> </td>
             <!-- <td style="vertical-align: top;"><a href="jeu_cas.php"
                  class="form_centre">Jouer sans pseudo</a> </td> -->
				 <td style="vertical-align: top;"><a href="letsquizagain.html"
                  class="form_centre">Présentation</a>
				<td style="vertical-align: top;"><a href="mise_en_garde.php"
                  class="form_centre">Aide à la connexion</a>
            </tr>
          </tbody>
        </table>
        <br>
      </form>
    </div>
    <!-- Fin du doc -->
    <script type="text/javascript" charset="iso-8859-15"> 
			var pseudo="";
			var numero_joueur;
			var pwd_alea;
			checkCookie("buff_3");
			if( pseudo=="")//connexion non
 				{
				document.getElementById("ok_b").onclick=function(){submitForm_identification()};
				} else {//connexion oui
				location.href=page_suivante;
				}
	</script>
  </body>
</html>
