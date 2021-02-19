<template>
  <div>
    <section class="container">
      <div class="row">
        <div class="p-5 rectangle" v-for="location in locations"> <!-- TODO: Ne connait pas la variables props -->
          <div class="texte">
            <div class="col-12 d-flex">
              <div class="col-9">
                <h3>{{ location.name }}</h3>
                <p></p>
              </div>
              <div class="col-3">
<!--                <img-->
<!--                  class="img-fluid dim ms-4"-->
<!--                  :src="'/assets/img/' + location.img"-->
<!--                  alt="Image du lieu"-->
<!--                />-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "Home",

  props: [
      'names',
      'desc',
      'img'
  ],

  data() {
    return {
      message: "Je suis le nom dun lieu",
        locations: [],
    };
  },

  mounted() {
    this.test();
  },

    created() {
      this.fetchInfos()
    },

  methods: {
    test() {
      this.message = "Je suis un nouveau paragraphe";
    },
    fetchInfos() {
        fetch("/index_json")
            .then(res => res.json())
            .then(res => {
                console.log(res.datas);
                this.locations = res.datas
            })
    }
  },
};



</script>

<style></style>
