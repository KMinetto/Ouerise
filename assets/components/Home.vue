<template>
  <div class="container">
    <nav class="navbar navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand">Ouerise</a>
        <form class="d-flex input-group w-auto">
          <input
            type="search"
            class="form-control"
            placeholder="Recherche"
            aria-label="Search" />
          <button
            class="btn btn-outline-primary"
            type="button"
            data-mdb-ripple-color="dark" >
            Recherche
          </button>
        </form>
      </div>
    </nav>

    <section>
      <div class="d-flex flex-column mb-3">
        <div class="p-2">{{message}}</div>
        <div class="p-2">Résultats 2</div>
        <div class="p-2">Résultats 3</div>
      </div>
      <div class="d-flex flex-column-reverse">
        <div class="p-2">Résultats 1</div>
        <div class="p-2">Résultats 2</div>
        <div class="p-2">Résultats 3</div>
      </div>
    </section>


  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      message: "Je suis le nom d'un lieu",
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


