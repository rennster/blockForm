<!DOCTYPE html>
<?php
/*$_SERVER['QUERY_STRING'];


$docRoot = gethostbyname($_SERVER['DOCUMENT_ROOT']);
//echo $docRoot; 
//echo $docRoot . '/' .'hzmo_logo.png';
$a=$_GET["a"];
$n=$_GET["n"];
$i=$_GET["i"];
$s=$_GET["s"];
$t=$_GET["t"];
$u=$_GET["u"];

*/

?>
<html style= "font-family: Segoe UI; font-size: 1.3em; margin-bottom: 15px;">
<head>
	<title>Odbijen pristup</title>
	
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="style.css" /> 
	<div id = "header">
	
	<IMG  src="hzmo_logo.png"; class="logo">
	


	</div>
</head>
<body >
	<div id = middle_box>
	<IMG src="linija.jpg"; class ="line">
	<IMG src="bg_clouds.jpg"; class="clouds">
	
	</div>
		
	<div  style = "width:100%; height:100%; margin-top:-170px; font:	"Trebuchet MS";" align="center" >	
		<p style="font-weight:bold; font-size:1.9em;"  >Pristup stranici je odbijen </p>
		<br />
		<div style= "display: inline-block;">
			<div style="float:left; padding-top:15px;">
				<IMG style=" height:50%; width:50%;"  src="stop.png">

			</div>
			
			<div style="float:right; font-size: 0.8em; font-weight:bold; font: "Trebuchet MS"; ">
				<p><b>Adresa računala:</b> <?php /* echo " {$a}";*/ ?></p>
				<p><b>Naziv računala:</b><?php/* echo " {$n}";*/  ?></p>
				<p><b>Korisnik: </b> <?php/* echo " {$i}"; */ ?> </p>
				<p><b>Grupa korisnika: </b> <?php/*echo " {$s}";*/  ?>
				<p><b>Kategorija: </b><?php /*echo " {$t}";*/ ?> </p>
				<p><b>URL: </b><?php/* echo " {$u}";*/ ?> </p>
			</div>
		</div>
		<br /><br /><br /><br />
		<p style="font-size: 0.8em; font: "Trebuchet MS";">Ukoliko smatrate da stranica ne bi trebala biti blokirana, javite nam putem poruke.</p>
		
		<form method="post">
					<label for="Message">Poruka:</label><br />
					<textarea name="Message" rows="10" cols="80" id="Message"></textarea>
					<br /><br />
					<input type="submit" name="submit" value="Submit" class="button" />
		</form>
<?php /*
	echo '<pre>'.print_r($_SERVER, TRUE).'</pre>';
	if(isset($_POST["submit"])){
		$EmailFrom = "squid@mo.hr";
		$EmailTo = "mrezni.administrator@mirovinsko.hr";
		$Subject = "Prijava problema Squid";
		$Message = Trim(stripslashes($_POST['Message'])); 
		
		$Body = "";
		$Body .= "Message: ";
		$Body .= $Message;
		$Body .= "\n";
		
		if (!$_POST["Message"]){
			echo 'Nije moguce poslati e-mail bez teksta';
		}
		else{
			$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
		}
		
}

*/

?>
	<br/>
	</div>
</body>
</html>
