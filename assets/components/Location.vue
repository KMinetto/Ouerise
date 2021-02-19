<template>
<div>
    <div class="container">
		<div class="row">

			<h2>Nom du site</h2>

			<div class="col-sm-6 card mb-3">
				<img src="/assets/img/palaisFacteur.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Rappel du nom du site</h5>
					<hr>
					<h5>Coordonées géographiques</h5>

					<p class="card-text">Longitude :
						
						Latitude :
						
					</p>
					<p class="card-text">
						
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
        'latitude',
        'longitude'
    ],
    data(){
        return {
            message: ''
        }
    },

    mounted(){
        console.log(this.latitude);
        console.log(this.longitude);
        this.test();
    },

    methods: {
        test(){
            this.message = 'Je suis un nouveau paragraphe'
        }
    },

}
</script>

<style>

</style>


