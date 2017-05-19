
<head>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
 <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
 
 
 
 <style>
 #mapid {position: absolute; top: 70px; left: 60px; height: 610px; width:610px; z-index: 1;}
 </style>
 
 </head>

 
  
<body> 

<?php
$filename ="MapMathBioEu";
include 'Template.php'; ?>

<div id="main">


<div id="section" style="position: absolute; top: 0px; left: 62px; width: 600px;	height: 30px; font: normal 30px Arial; color: #004800;	padding-bottom: 18px; 	padding-left: 20px; border-bottom: thin dotted;	border-color: #00bf00;;">A map of Mathematical Biology in Europe</div>

 
<div id="content">
	<div id="mapid"></div>

	<script>  
	
	var mymap = L.map('mapid').setView([52, 14], 4);
	//NIKOS: Missing the reading of the data from a .csv file
	var INST = 
	
	// an example of the output instance:
	var INST = [
		[49.41, 8.71,'BioQuant','Ruprecht Karls-University Heidelberg',"http://www.bioquant.uni-heidelberg.de"],
		[40, 15,'random', 'random','random']
	];
	
	
	L.tileLayer('	https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
	

/* INST and GROUPS */
	// NIKOS: Missing the upper imit of the loop as the number of lines of INST
	// NIKOS: Missing correct incorporation of clickable website in the institutes
	// TBD : N = liczba_instytutow(INST) // ma zwrócić ilość wierszy
	for (i = 0; i<=2; i++)
	{
		a = INST[i][0]
		b = INST[i][1]
		c = INST[i][2]
		d = INST[i][3]
		e = INST[i][4]
		moj_string = '<b>'+c+'</b><br />'+d+'<br /><a href="'+e+'">Website</a>'
		L.marker([a, b]).addTo(mymap).bindPopup(moj_string);
	}
/* end of INST and GROUPS*/

	</script>


</div>
</div>

</body>
