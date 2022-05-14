<template>
  <!--Toggleable Link-->
  <li class="toggleable hover:bg-blue-800 hover:text-white">
    <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
    <label for="toggle-one" class="block cursor-pointer py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Click</label>
    <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800">
      <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
        <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
          <h3 class="font-bold text-xl text-white text-bold mb-2">Heading 1</h3>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
        </ul>
        <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
          <h3 class="font-bold text-xl text-white text-bold mb-2">Heading 2</h3>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
        </ul>
        <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
          <h3 class="font-bold text-xl text-white text-bold">Heading 3</h3>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
          <li>
            <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Category One Sublink</a>
          </li>
        </ul>
        <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
          <h3 class="font-bold text-xl text-white text-bold mb-2">Heading 4</h3>
          <li class="pt-3">
            <img src="https://placehold.it/205x172">
          </li>
        </ul>
      </div>
    </div>
  </li>

  <!-- ## Toggleable Link Template ##

<li class="toggleable"><input type="checkbox" value="selected" id="toggle-xxx" class="toggle-input"><label for="toggle-xxx" class="cursor-pointer">Click</label><div role="toggle" class="mega-menu">
Add your mega menu content
</div></li>

-->
</template>

<script>
export default {
  name: "NavToggleLink"
}
</script>

<style scoped>

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

</style>