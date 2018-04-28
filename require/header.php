<?php
	
	echo '
		<!DOCTYPE html>
	  	<html lang="fr">

	  <head>
	     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	     <meta charset="UTF-8"/>
	     <link rel="icon" type="image/png" href="./img/firefox.png">
	     <link rel="stylesheet" href="./css/main.css"/>
	     <title>Home</title>

	  </head>

	  <body bgcolor="WhiteSmoke">


	  <div class="header">
	    <ul>
	      <li><a class="dropbtn" href="#11">1</a></li>
	      <li><a href="#news">2</a></li>
	      <li><a href="#contact">3</a></li>
	      <li><a href="?add">+</a></li>
	      <li class="recherche">
	      <form method="get" action="http://www.google.com/search">
	      <div style="padding:10px;width:;">
	  <table border="0" align="center" cellpadding="0">
	  <tr><td>
	  <input type="text"   name="q" size="25" style="color:grey;"
	  maxlength="255" value="Recherche"
	  onfocus="if(this.value==this.defaultValue)this.value=\'\'; this.style.color=\'grey\';" onblur="if(this.value==\'\')this.value=this.defaultValue;"/>

	  </td></tr>
	  </table>
	  </div>

	  </form>
	  </li>
	    </ul>
	  </div>
	  
	  <div class="container" id="conteneur">
	';



?>
