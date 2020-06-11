var mapObj = {

    initMap: function () {
        var map = L.map('mapid');
        var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        var osmAttrib='Map data © OpenStreetMap contributors';
        var osm = new L.TileLayer(osmUrl, {attribution: osmAttrib});
        map.setView([43.6149, 4.00588], 12);
        map.addLayer(osm);
    }
};

var mapid = Object.create(mapObj);
mapid.initMap();
