<template>
<div>
    <div class="container">
		<div class="row" v-for="data of location" :key="data.id">

			<h2> {{ data.name }} </h2>

			<div class="col-sm-6 card mb-3">
				<img :src="'/assets/img/' + data.img " class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"> {{ data.name }} </h5>
					<hr>
					<h5>Coordonées géographiques</h5>

					<p class="card-text">
                        Longitude : {{ data.longitude }}
					</p>
					<p class="card-text">
                        Latitude : {{ data.latitude }}
					</p>
				</div>
			</div>

			<div id="map" class="col-sm-5 offset-1 card" v-bind:latitude-map="latitude" v-bind:longitude-map="longitude"></div>
		</div>
	</div>
</div>
</template>

<script>

export default {

    name: 'Location',
    props: [
        "latitude",
        "longitude",
        "idLocation"
    ],

    data() { return { location: [] } },

    mounted() { console.log(this.latitude + this.longitude)},

    created() { this.fetchInfos()
				console.log(this.location) },

    methods: {
        fetchInfos() {
            fetch ("/lieu/" + this.idLocation + "_json")
                .then(res => res.json())
                .then(res => {
                    this.location = res.data
                })
        }
    },

}
</script>

<style>

</style>


