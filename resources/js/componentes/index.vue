<template>
  <div class="mt-8 px-12 mb-10">
    <div class="relative w-full max-w-5xl mx-auto overflow-hidden rounded-xl">
      <!-- Carrusel -->
      <div class="relative h-80">
        <Transition name="fade" mode="out-in">
          <img
            :src="images[currentIndex]"
            :key="images[currentIndex]"
            class="absolute inset-0 w-full h-full object-cover"
            :alt="`Slide ${currentIndex + 1}`"
          />
        </Transition>
      </div>

      <!-- Indicadores -->
      <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-2">
        <button
          v-for="(img, i) in images"
          :key="i"
          @click="currentIndex = i"
          class="w-3 h-3 rounded-full transition-colors duration-200"
          :class="currentIndex === i ? 'bg-white' : 'bg-gray-400 hover:bg-gray-300'"
          :aria-label="`Ir a slide ${i + 1}`"
        ></button>
      </div>

      <!-- Controles de navegación opcionales -->
      <button 
        @click="prevSlide"
        class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white p-2 rounded-full transition-all duration-200"
        aria-label="Slide anterior"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
      </button>
      
      <button 
        @click="nextSlide"
        class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white p-2 rounded-full transition-all duration-200"
        aria-label="Siguiente slide"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>
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

// Función para ir al slide anterior
function prevSlide() {
  currentIndex.value = currentIndex.value === 0 ? images.length - 1 : currentIndex.value - 1
}

// Función para ir al siguiente slide
function nextSlide() {
  currentIndex.value = (currentIndex.value + 1) % images.length
}

onMounted(() => {
  // Autoplay cada 7 segundos
  interval = setInterval(() => {
    nextSlide()
  }, 7000)
})

onUnmounted(() => {
  if (interval) {
    clearInterval(interval)
  }
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