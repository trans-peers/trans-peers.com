<template>
  <section class="text-gray-600 body-font">
    <div class="flex px-0 pt-0 pb-4 items-center justify-center flex-col">
      <img class="md:w-8/6 w-full max-h-96 mb-10 object-cover object-center" alt="hero" src="https://source.unsplash.com/9J1NuJ7Dgz4/1024x768">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{title}}</h1>
        <p class="mb-8 leading-relaxed"><slot></slot></p>
        <div class="flex justify-center">
          <button class="inline-flex text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg">Sign Up for More Info</button>
          <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Find Out More</button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Hero",
  props: [
      'title'
  ]
}
</script>

<style scoped>

</style>