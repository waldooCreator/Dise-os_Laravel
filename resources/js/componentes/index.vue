<template>
  <div class="mt-32 relative w-full max-w-3xl mx-auto overflow-hidden rounded-xl">
    <!-- Carrusel -->
    <div class="relative h-64">
      <Transition name="fade" mode="out-in">
        <img
          :src="images[currentIndex]"
          :key="images[currentIndex]"
          class="absolute inset-0 w-full h-full object-cover"
        />
      </Transition>
    </div>

    <!-- Indicadores -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-2">
      <button
        v-for="(img, i) in images"
        :key="i"
        @click="currentIndex = i"
        class="w-3 h-3 rounded-full"
        :class="currentIndex === i ? 'bg-white' : 'bg-gray-400'"
      ></button>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

// Imagenes locales en /public/images/
const images = [
   '/images/Gemini_Generated_Image_9zjii59zjii59zji.png',
  '/images/neta.png',
  '/images/paquete.png',
]

const currentIndex = ref(0)
let interval = null

onMounted(() => {
  interval = setInterval(() => {
    currentIndex.value = (currentIndex.value + 1) % images.length
  }, 10000)
})

onUnmounted(() => {
  clearInterval(interval)
})
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1s ease-in-out;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
