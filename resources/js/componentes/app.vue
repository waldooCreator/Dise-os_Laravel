<template>
  <div id="app" class="min-h-screen bg-[rgba(241,241,240,1)]">
    <!-- Header Component -->
    <HeaderComponent />

    <!-- Main Content Area -->
    <main class="w-full max-w-7xl mx-auto px-10">
      <!-- Rastreo Component -->
      <RastreoComponent />
      <!-- Index Component (Carousel) -->
      <IndexComponent />
      <!-- Targets Component (Service Cards) -->
      <TargetsComponent />
    </main>
  </div>
</template>

<script setup>
import HeaderComponent from './header.vue'
import RastreoComponent from './rastreo.vue'
import IndexComponent from './index.vue'
import TargetsComponent from './targets.vue'
</script>

<style>
#app {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
</style>