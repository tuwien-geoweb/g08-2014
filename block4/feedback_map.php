<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="http://openlayers.org/en/v3.0.0/css/ol.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<style type="text/css">
html, body {
margin: 0;
width: 100%;
height: 100%;
}
.map {
height: 100%;
width: 100%;
}
</style>
<script src="http://openlayers.org/en/v3.0.0/build/ol.js" type="text/javascript"></script>
<title>OpenLayers 3 example</title>
</head>
<body>
<div class="row">
<div class="col-md-8" style=";">
<div id="map" class="map">
<script type="text/javascript">
var map = new ol.Map({
target: 'map',
layers: [
new ol.layer.Tile({
source: new ol.source.MapQuest({layer: 'sat'})
}),
new ol.layer.Vector({
source: new ol.source.GeoJSON({
projection: 'EPSG:3857',
url: 'mydata.geojson'
})
})
],
view: new ol.View({
center: ol.proj.transform([16.319, 48.166], 'EPSG:4326', 'EPSG:3857'),
zoom: 11
})
});
</script>
</div>
</div>
<div class="col-md-4">
<h2>Karte der Gruppe 8</h2>
<?php include feedback.php ?>
</div>
</div>
</body>
</html>
