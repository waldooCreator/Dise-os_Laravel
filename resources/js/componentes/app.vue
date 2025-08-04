<template>
    <div id="app" class="min-h-screen bg-[rgba(241,241,240,1)]">
        <!-- Header Component -->
        <HeaderComponent />
         
        <!-- Main Content Area - Más cerca del header -->
        <main class="w-full max-w-7xl mx-auto px-10 -mt-6">
            <!-- Contenedor horizontal para Rastreo y Cotizar -->
            <div class="flex justify-between items-center ml-6 mr-6 mt-4">
                <!-- Rastreo Component -->
                <RastreoComponent />
                <!-- Cotizar Component -->
                <CotizarComponent />
            </div>
            <!-- Index Component (Carousel) - Con margen superior para separar del rastreo -->
            <div class="mt-8">
                <IndexComponent />
            </div>
            <!-- Targets Component (Service Cards) -->
            <TargetsComponent />
        </main>
    </div>
</template>

<script setup>
    import HeaderComponent from './header.vue'
    import RastreoComponent from './rastreo.vue'
    import CotizarComponent from './cotizar.vue'
    import IndexComponent from './index.vue'
    import TargetsComponent from './targets.vue'
</script>

<style>
    #app {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>