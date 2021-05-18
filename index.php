<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <style>
        #mapid {
            height: 100%;
        }
    </style>
    <title>Nama-npm</title>
</head>

<body>
    <div id="mapid"></div>
</body>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<script>
    var mymap = L.map('mapid').setView([-5.3952574, 105.1984287], 8);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://api.whatsapp.com/send/?phone=628154038751&text=saya_nyontek_kak&app_absent=0">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);

    var marker = L.marker([-5.3952574, 105.1984287]).addTo(mymap);
    var marker2 = L.marker([-5.434187, 104.297333]).addTo(mymap);
    var marker3 = L.marker([-3.842332, 105.36438]).addTo(mymap);
    var marker4 = L.marker([-4.598327, 105.699463]).addTo(mymap);
    var marker5 = L.marker([-4.587376, 104.320679]).addTo(mymap);
    var marker6 = L.marker([-5.205835, 105.617065]).addTo(mymap);
    var marker7 = L.marker([-5.080001, 104.743652]).addTo(mymap);
    var marker8 = L.marker([-4.510714, 105.205078]).addTo(mymap);


    var circle = L.circle([-5.405, 105.200], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 10000
    }).addTo(mymap);

    var circle2 = L.circle([-5.434187, 104.297333], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 30000
    }).addTo(mymap);

    var circle3 = L.circle([-3.842332, 105.36438], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 20000
    }).addTo(mymap);

    var circle4 = L.circle([-4.598327, 105.699463], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 10000
    }).addTo(mymap);

    var circle5 = L.circle([-4.587376, 104.320679], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 30000
    }).addTo(mymap);

    var circle6 = L.circle([-5.205835, 105.617065], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 10000
    }).addTo(mymap);

    var circle7 = L.circle([-5.080001, 104.743652], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 20000
    }).addTo(mymap);

    var circle8 = L.circle([-4.510714, 105.205078], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 20000
    }).addTo(mymap);

    var polygon = L.polygon([
            [-4.929515, 103.573608],
            [-4.777626, 103.77273],
            [-4.881626, 103.871613],
            [-4.870679, 104.194336],
            [-4.830997, 104.36737],
            [-4.670874, 104.28222],
            [-4.517559, 104.313812],
            [-4.38886, 104.35501],
            [-4.295744, 104.462128],
            [-4.219052, 104.62554],
            [-4.264246, 104.80270],
            [-3.940981, 105.14328],
            [-3.847812, 105.29434],
            [-3.803965, 105.26825],
            [-3.720375, 105.32180],
            [-3.721745, 105.349274],
            [-3.775189, 105.375366],
            [-3.7793, 105.438538],
            [-3.93413, 105.623932],
            [-4.138243, 105.834045],
            [-4.382013, 105.869751],
            [-4.439521, 105.926056],
            [-4.640761, 105.924683],
            [-4.705091, 105.901337],
            [-4.874784, 105.88348],
            [-4.943197, 105.917816],
            [-5.233187, 105.871124],
            [-5.276948, 105.864258],
            [-5.528511, 105.828552],
            [-5.581817, 105.842285],
            [-5.693882, 105.817566],
            [-5.842813, 105.799713],
            [-5.915215, 105.713196],
            [-5.857841, 105.691223],
            [-5.844179, 105.600586],
            [-5.816856, 105.575867],
            [-5.702081, 105.547028],
            [-5.697982, 105.509949],
            [-5.626919, 105.393219],
            [-5.466997, 105.309448],
            [-5.4793, 105.2696233],
            [-5.521676, 105.261383],
            [-5.594118, 105.250397],
            [-5.726678, 105.225677],
            [-5.779966, 105.228424],
            [-5.830518, 105.173492],
            [-5.618719, 104.773865],
            [-5.533978, 104.69970],
            [-5.509374, 104.5884],
            [-5.544913, 104.556885],
            [-5.57225, 104.561005],
            [-5.723945, 104.659882],
            [-5.749907, 104.654388],
            [-5.835982, 104.720306],
            [-5.889261, 104.712067],
            [-5.939802, 104.746399],
            [-5.957558, 104.5610053],
            [-5.916581, 104.541779],
            [-5.885162, 104.565125],
            [-5.726678, 104.411316],
            [-5.717113, 104.4126893],
            [-5.643319, 104.28772],
            [-5.620086, 104.312433],
            [-5.529877, 104.208069],
            [-5.311134, 103.984222],
            [-5.271478, 103.995209],
            [-5.246863, 103.894958],
            [-5.218144, 103.893585],
            [-5.173011, 103.933411],
            [-5.119669, 103.85373],
            [-5.048539, 103.778229],
            [-5.063586, 103.748016]
        ])
        .addTo(mymap);

    marker.bindPopup("400").openPopup();
    marker2.bindPopup("1000").openPopup();
    marker3.bindPopup("700").openPopup();
    marker4.bindPopup("400").openPopup();
    marker5.bindPopup("1000").openPopup();
    marker6.bindPopup("400").openPopup();
    marker7.bindPopup("700").openPopup();
    marker8.bindPopup("700").openPopup();
    circle.bindPopup("Jalan Teuku Cik Ditro");


    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }

    mymap.on('click', onMapClick);
</script>

</html>