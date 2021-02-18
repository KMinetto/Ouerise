<template>
  <div class="col-sm-5 offset-1 card">
    
    <div id="mapping" class="map"></div>
    
  </div>
</template>

<script>
export default {
  name: "Map",
    props: [
        'latitude',
        'longitude'
    ],
  data() {
    return {
      map: null,
      tileLayer: null,
      layers: [],
    };
  },

  mounted() {
    console.log("Depuis map : " + this.latitude)
    console.log("Depuis map : " + this.longitude)
    this.initMap();
    // this.initLayers();
  },

  methods: {
    initMap() {
      this.map = L.map("mapping").setView([49.1056, 3.2636], 13);
      this.tileLayer = L.tileLayer(
        'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}',
        {
           attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibmF0aC1wdnIiLCJhIjoiY2tsYXZ0MTluMDExaTJxbTExaWFseDJxZSJ9.uUwMTQtztuZ1617qnM_Xzw'

        }).addTo(this.map);
    },
    // initLayers() {},
  },
};
</script>

<style></style>
