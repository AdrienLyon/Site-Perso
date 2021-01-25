function init(){
	const lyon = {
		lat: 45.75,
		lng: 4.85
	}

	const zoomLevel = 11;

	const map = L.map('mapid').setView([lyon.lat, lyon.lng], zoomLevel);

	const mainLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYWRyaWVubHlvbiIsImEiOiJja2tibnp3cjQwYncwMm9vYTQ2ZmNpN2RwIn0.f9EASgdQUK1b4F9_Urouew'});

    mainLayer.addTo(map);
}

