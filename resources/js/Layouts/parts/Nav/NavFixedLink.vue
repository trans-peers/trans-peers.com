<template>
  <!--Regular Link-->
  <li class="hover:bg-blue-200 hover:text-gray-600">
    <a :href="href" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold"><slot /></a>
  </li>
</template>

<script>
export default {
  name: "NavFixedLink",
  props: [
      'href'
  ]
}
</script>

<style scoped>
.hoverflag {
  background-image: linear-gradient(0deg, #c4f0ff 10%, #ffe8fa 10%, #ffe8fa 20%, #fff 20%, #fff 30%, #ffe8fa 30%, #ffe8fa 40%, #c4f0ff 40%, #c4f0ff 50%, #c4f0ff 50%, #c4f0ff 60%, #ffe8fa 60%, #ffe8fa 70%, #fff 70%, #fff 80%, #ffe8fa 80%, #ffe8fa 90%, #c4f0ff 90%, #c4f0ff 100%);
  background-size: 200.00px 200.00px;
  background-repeat: no-repeat;
}
</style>