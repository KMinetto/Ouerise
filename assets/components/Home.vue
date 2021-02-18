<template>
  <div>
    <section class="container">
      <div class="row">
        <div class="p-5 rectangle">
          <div class="texte">
            <div class="col-12 d-flex">
              <div class="col-9">
                <h3>{{ message }}</h3>
                <p>{{ message }}</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quos neque nam vero adipisci dolore labore quasi explicabo, libero architecto necessitatibus praesentium totam est expedita? Quis aliquam velit quo sequi!Lorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam veritatis quisquam delectus nulla dignissimos eos, voluptatibus provident sunt illum soluta ipsum sapiente nisi! Eum, eveniet deleniti. Cum accusamus in ut.</p>
              </div>
              <div class="col-3">
                <img
                  class="img-fluid dim ms-4"
                  src="/assets/img/palaisFacteur.jpg"
                  alt="palais"
                />
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


