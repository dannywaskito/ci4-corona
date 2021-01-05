<div id="mapid" style="height: 500px;"></div>
<script>

	var mymap = L.map('mapid').setView([-1.521843, 120.603580], 5);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v10',
	}).addTo(mymap);


	<?php  foreach ($nasional['features'] as $key => $lok) {?>
	L.marker([<?= $lok['geometry']['y']?>, <?=$lok['geometry']['x']?>]).addTo(mymap)
	.bindPopup("Provinsi: <?=$lok['attributes']['Provinsi']?><br/>" +
				"Positif: <?=$lok['attributes']['Kasus_Posi']?><br/> "+
				"Sembuh: <?=$lok['attributes']['Kasus_Semb']?><br/> "+
				"Meninggal: <?=$lok['attributes']['Kasus_Meni']?>"
				);
	 <?php }?>

</script>