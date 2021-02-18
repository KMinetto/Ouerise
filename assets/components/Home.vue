<template>
  <div>
    <section class="container">
      <div class="row">
        <div class="d-flex flex-column mb-3">
          <div class="p-2 rectangle">
            <div class="texte">
              <div class="col-12 d-flex">
                <div class="col-8">
                  <h3>{{ message }}</h3>
                  <p>{{ message }}</p>
                </div>
                <div class="col-4">
                  <img
                    class="dim"
                    src="/assets/img/palaisFacteur.jpg"
                    alt="palais"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 rectangle">
            <div class="texte">
              <div class="col-12 d-flex">
                <div class="col-8">
                  <h3>{{ message }}</h3>
                  <p>{{ message }}</p>
                </div>
                <div class="col-4">
                  <img
                    class="dim"
                    src="/assets/img/palaisFacteur.jpg"
                    alt="palais"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 rectangle">
            <div class="texte">
              <div class="col-12 d-flex">
                <div class="col-8">
                  <h3>{{ message }}</h3>
                  <p>{{ message }}</p>
                </div>
                <div class="col-4">
                  <img
                    class="dim"
                    src="/assets/img/palaisFacteur.jpg"
                    alt="palais"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 rectangle">
            <div class="texte">
              <div class="col-12 d-flex">
                <div class="col-8">
                  <h3>{{ message }}</h3>
                  <p>{{ message }}</p>
                </div>
                <div class="col-4">
                  <img
                    class="dim"
                    src="/assets/img/palaisFacteur.jpg"
                    alt="palais"
                  />
                </div>
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
  data() {
    return {
      message: "Je suis le nom dun lieu",
    };
  },

  mounted() {
    console.log("test");
    this.test();
  },

  methods: {
    test() {
      this.message = "Je suis un nouveau paragraphe";
    },
  },
};
</script>

<style>
</style>


