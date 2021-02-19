<template>
  <div>
    <section class="container">
      <div class="row">
        <div class="p-5 rectangle" v-for="prop in props"> <!-- TODO: Ne connait pas la variables props -->
          <div class="texte">
            <div class="col-12 d-flex">
              <div class="col-9">
                <h3>{{ prop.name }}</h3>
                <p>{{ prop.desc }}</p>
              </div>
              <div class="col-3">
                <img
                  class="img-fluid dim ms-4"
                  src="/assets/img/{{ prop.img }}"
                  alt="Image du lieu"
                />  <!-- TODO: Trouver un moyen de mettre la route vers l'image -->
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
      'name',
      'desc',
      'img'
  ],

  data() {
    return {
      message: "Je suis le nom dun lieu",
    };
  },

  mounted() {
    console.log("test");
    console.log(this.name) // S'affiche
    console.log(this.desc) // S'affiche
    console.log(this.img) // S'affiche
    this.test();
  },

  methods: {
    test() {
      this.message = "Je suis un nouveau paragraphe";
    },
  },
};
</script>

<style></style>
