<template>
  <div>
    <section class="container">
      <div class="row">
        <div class="d-flex flex-column mb-3">
          <div class="p-2 rectangle">
            <div class="texte">
              <h3>{{ message }}</h3>
              {{ message }} <img src="" alt="" />
            </div>
          </div>
          <div class="p-2 rectangle">
            <div class="texte">
              <h3>{{ message }}</h3>
              {{ message }} <img src="" alt="" />
            </div>
          </div>
          <div class="p-2 rectangle">
            <div class="texte">
              <h3>{{ message }}</h3>
              {{ message }} <img src="" alt="" />
            </div>
          </div>
          <div class="p-2 rectangle">
            <div class="texte">
              <h3>{{ message }}</h3>
              {{ message }} <img src="" alt="" />
            </div>
          </div>
          <div class="p-2 rectangle">
            <div class="texte">
              <h3>{{ message }}</h3>
              {{ message }} <img src="" alt="" />
            </div>
          </div>
          <div class="p-2 rectangle">
            <div class="texte">
              <h3>{{ message }}</h3>
              {{ message }} <img src="" alt="" />
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


