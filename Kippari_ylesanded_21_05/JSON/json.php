<?php

die("test");

$kasutajad=array();
$k=new stdClass();
$k->kasutajanimi="juku";
$k->punkte=7;
$kasutajad[0]=$k;

$k=new stdClass();
$k->kasutajanimi="kati";
$k->punkte=8;
$kasutajad[1]=$k;

?>
<!doctype html>
<html>
	<head>
		<title>Andmete lugemine</title>
		<script>
		var kd=<?php echo json_encode($kasutajad); ?>;
		function kuvaKasutajad(kihinimi){
		var t="<table><tr><th>Kasutajanimi</th><th>Tulemus</th></tr>";
		for(var i=0; i<kd.length; i++){
		t+="<tr><td>"+kd[i].kasutajanimi+"</td>"+
		"<td>"+kd[i].punkte+"</td></tr>\n";
		}
	t+="</table>";
	document.getElementById(kihinimi).innerHTML=t;
	}
	</script>
</head>
<body onload="kuvaKasutajad('kiht1')">
	<div id="kiht1"></div>
</body>
</html>