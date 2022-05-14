<template>
  <!-- Header including logo and mega menu -->
  <Header/>

  <slot></slot>
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