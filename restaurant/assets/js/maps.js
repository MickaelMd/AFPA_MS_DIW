let map;
let marker = [];
let mapOptions = {
  scrollWheelZoom: false,
};

const id = "OSM-map";

const centerLatLng = [49.928640638465176, 2.273311614990235];
map = L.map(id, mapOptions).setView(centerLatLng, 20);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: "",
}).addTo(map);

marker = L.marker(L.latLng(49.928640638465176, 2.273311614990235), {
  title: "The District",
});
marker.addTo(map);
marker.bindPopup("The District");

L.control
  .bigImage({
    position: "topright",
  })
  .addTo(map);
