<template>
    <div id="app" class="min-h-screen bg-[rgba(241,241,240,1)]">


        <!-- Header Component -->
        <HeaderComponent />
        
        
        <!-- Main Content Area - Más cerca del header -->
        <main class="w-full max-w-7xl mx-auto px-10 mb-2">
            <!-- Index Component (Carousel) - Con margen superior para separar del rastreo -->
            <div class="mt-20">
                <IndexComponent />
            </div>
            <!-- Contenedor horizontal para Rastreo y Cotizar -->
            <div class="flex justify-between items-center ml-6 mr-6 mt-4">
                <!-- Rastreo Component -->
                <RastreoComponent />
                <!-- Cotizar Component -->
                <CotizarComponent />
            </div>
            <!-- Separador visual -->
            <div class="mt-14">
                <Separador1 />
            </div>
            
            <div class="flex flex-col gap-2">
                <!-- Targets Component (Service Cards) -->
            <TargetsComponent />
            
            <div class="mb-24">
                <!-- Mobile App Component -->
                <MobileappComponent />
            
            </div>
            
            
            </div>
            
        </main>
        <!-- Footer Component -->
            <FooterComponent />
    </div>
</template>

<script setup>
    import HeaderComponent from './header.vue'
    import IndexComponent from './index.vue'
    import RastreoComponent from './rastreo.vue'
    import CotizarComponent from './cotizar.vue'
    import Separador1 from './separador1.vue'
    import TargetsComponent from './targets.vue'
    import MobileappComponent from './mobileapp.vue'
    import FooterComponent from './footer.vue'


</script>

<style>
    #app {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>