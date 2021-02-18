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

			<div id="map" class="col-sm-5 offset-1 card"></div>

		</div>
	</div>
</div>
</template>

<script>
export default {
    name: 'Location',
    data(){
        return {
            message: ''
        }
    },

    mounted(){
        console.log('Location');
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


