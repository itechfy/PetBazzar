// var urlParams = new URLSearchParams(window.location.search);
// if (urlParams.has("city")) {
//   urlParams.get("city"); //getValue and Set
// }
$('[name="city"]').change(function (e) {
  e.preventDefault();
  if (e.target.value !== "") {
    const url =
      "https://maps.google.com/maps?q=" +
      e.target.value +
      "&t=&z=13&ie=UTF8&iwloc=&output=embed";
    $("#gmap_canvas").attr("src", url);
  }
});

var locations = [
  ["LOCATION_1", 11.8166, 122.0942],
  ["LOCATION_2", 11.9804, 121.9189],
  ["LOCATION_3", 10.7202, 122.5621],
  ["LOCATION_4", 11.3889, 122.6277],
  ["LOCATION_5", 10.5929, 122.6325],
];

var map = L.map("map").setView([11.206051, 122.447886], 8);
mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: "&copy; " + mapLink + " Contributors",
  maxZoom: 18,
}).addTo(map);

for (var i = 0; i < locations.length; i++) {
  marker = new L.marker([locations[i][1], locations[i][2]])
    .bindPopup(locations[i][0])
    .addTo(map);
}
