<template>
  <nav class="relative bg-white border-b-2 border-gray-300 text-gray-900 sticky">
    <div class="absolute flag h-full w-400 max-w-400">&nbsp</div>
    <div class="container mx-auto flex justify-between">
      <div class=" relative block p-4 lg:p-6 text-xl ml-12 font-bold">Transpeers.co.uk</div>
      <ul class="flex">
        <NavFixedLink :href="route('welcome')">Home</NavFixedLink>
        <NavFixedLink :href="route('about')">About</NavFixedLink>
        <NavFixedLink :href="route('contact')">Contact</NavFixedLink>

      </ul>
    </div>
  </nav>
</template>

<script>
import NavFixedLink from "./Nav/NavFixedLink";
export default {
  name: "Header",
  components: {NavFixedLink}
}
</script>

<style scoped>

/* #Mega Menu Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.mega-menu {
  display: none;
  left: 0;
  position: absolute;
  text-align: left;
  width: 100%;
}



/* #hoverable Class Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.hoverable {
  position: static;
}

.hoverable > a:after {
  content: "\25BC";
  font-size: 10px;
  padding-left: 6px;
  position: relative;
  top: -1px;
}

.hoverable:hover .mega-menu {
  display: block;
}


/* #toggle Class Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.toggleable > label:after {
  content: "\25BC";
  font-size: 10px;
  padding-left: 6px;
  position: relative;
  top: -1px;
}

.toggle-input {
  display: none;
}
.toggle-input:not(checked) ~ .mega-menu {
  display: none;
}

.toggle-input:checked ~ .mega-menu {
  display: block;
}

.toggle-input:checked + label {
  color: white;
  background: #2c5282; /*@apply bg-blue-800 */
}

.toggle-input:checked ~ label:after {
  content: "\25B2";
  font-size: 10px;
  padding-left: 6px;
  position: relative;
  top: -1px;
}

.flag {
  background-image: linear-gradient(138deg, #ff002f 1.61%, #ff9e30 1.61%, #ff9e30 3.23%, #f2ff00 3.23%, #f2ff00 4.84%, #00b017 4.84%, #00b017 6.45%, #5067eb 6.45%, #5067eb 8.06%, #831ed1 8.06%, #831ed1 9.68%, #fff 9.68%, #fff 11.29%, #f9a8ff 11.29%, #f9a8ff 12.90%, #7ddfff 12.90%, #7ddfff 14.52%, #bd7d40 14.52%, #bd7d40 16.13%, #000000 16.13%, #000000 17.74%, #ffffff 17.74%, #ffffff 50%, #ff002f 50%, #ff002f 51.61%, #ff9e30 51.61%, #ff9e30 53.23%, #f2ff00 53.23%, #f2ff00 54.84%, #00b017 54.84%, #00b017 56.45%, #5067eb 56.45%, #5067eb 58.06%, #831ed1 58.06%, #831ed1 59.68%, #fff 59.68%, #fff 61.29%, #f9a8ff 61.29%, #f9a8ff 62.90%, #7ddfff 62.90%, #7ddfff 64.52%, #bd7d40 64.52%, #bd7d40 66.13%, #000000 66.13%, #000000 67.74%, #ffffff 67.74%, #ffffff 100%);
  background-size: 620.00px 558.25px;
  min-width: 400px;
}

</style>