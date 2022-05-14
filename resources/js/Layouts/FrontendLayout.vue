<template>
  <!-- Header including logo and mega menu -->
  <Header/>
  <div class="bg-gray-100">
    <main class="container mx-auto bg-white">
      <slot></slot>
    </main>
  </div>
  <!-- Footer including the banners -->
  <Footer/>

</template>

<script>
import Header from "./parts/Header";
import Footer from "./parts/Footer";

export default {
  name: "FrontendLayout",
  components: {Footer, Header}
}
</script>

<style scoped>

</style>