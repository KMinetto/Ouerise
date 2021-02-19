<template>
  <div>
    <!-- Footer -->
    <footer class="border text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                <a class="text-dark" href="https://www.mapbox.com/"
          >API</a
        >
        <a class="text-dark" href="https://github.com/KMinetto/Ouerise"
          >GitHub</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      message: "",
    };
  },

  mounted() {
    console.log("testFooter");
    this.test();
  },

  methods: {
    test() {
      this.message = "";
    },
  },
};
</script>

<style>
</style>


