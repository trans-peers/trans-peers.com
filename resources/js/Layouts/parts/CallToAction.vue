<template>
  <section class="text-gray-600 body-font">
    <div class="px-5 pt-4 pb-8 mx-auto">
      <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">{{title}}</h2>
      <div class="flex flex-wrap -mx-4 -mb-10 text-center">
        <div class="sm:w-1/2 mb-10 px-4">
          <div class="rounded-lg overflow-hidden">
            <div class="w-full">
              <div class="coding terminal inverse-toggle px-5 pt-4 shadow-lg text-gray-100 text-sm font-mono subpixel-antialiased
              bg-gray-800  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
                <div class="top mb-2 flex">
                  <div class="h-3 w-3 bg-red-500 rounded-full"></div>
                  <div class="ml-2 h-3 w-3 bg-orange-300 rounded-full"></div>
                  <div class="ml-2 h-3 w-3 bg-green-500 rounded-full"></div>
                </div>
                <div class="mt-4 flex">
                  <span class="text-green-400">computer:~$</span>
                  <span class="typing items-start pl-2">
                    apt-get hire me
                    <br>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Tech Co-ordinators</h2>
          <p class="leading-relaxed text-base">We are looking for techy people to help us in our mission going forward - to provide help and support, tailored by the community, for the community. Share our vision? sign up below:</p>
          <button class="flex mx-auto mt-6 text-white bg-pink-500 border-0 py-2 px-5 focus:outline-none hover:bg-pink-600 rounded">Sign me up!</button>
        </div>
        <div class="sm:w-1/2 mb-10 px-4">
          <div class="rounded-lg overflow-hidden">
            <img alt="content" class="cta object-cover object-center h-full w-full" src="https://source.unsplash.com/00ZFvtWiHq4/1202x502">
          </div>
          <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Allies</h2>
          <p class="leading-relaxed text-base">Interested to see what's going on and where we're heading on our mission? Click here:</p>
          <button class="flex mx-auto mt-6 text-white bg-pink-500 border-0 py-2 px-5 focus:outline-none hover:bg-pink-600 rounded">Register for Updates</button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "CallToAction",
  props: [
      'title'
  ]
}
</script>

<style scoped>
.terminal {
  min-height: 301px;
  max-height: 301px;
}
.cta {
  min-height: 301px;
  max-height: 301px;
}
</style>