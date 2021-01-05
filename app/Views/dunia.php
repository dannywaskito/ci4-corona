<div id="mapid" style="height: 500px;"></div>
<script>

	var mymap = L.map('mapid').setView([0,0], 1);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v10',
	}).addTo(mymap);


	<?php  foreach ($dunia as $key => $lok) {?>
	L.marker([<?= $lok['attributes']['Lat']?>, <?=$lok['attributes']['Long_']?>]).addTo(mymap)
	.bindPopup("Negara: <?=$lok['attributes']['Country_Region']?><br/>" +
				"Positif: <?=$lok['attributes']['Confirmed']?><br/> "+
				"Sembuh: <?=$lok['attributes']['Recovered']?><br/> "+
				"Meninggal: <?=$lok['attributes']['Deaths']?>"
				);
	 <?php }?>

</script>