<template>
  <div class="mt-6 ml-6 flex items-center bg-white rounded-full shadow-md px-4 py-2 w-[430px] max-w-full">
  <span class="text-sm text-gray-700 font-medium mr-3 whitespace-nowrap">
    Rastrear por número de guía:
  </span>
  <input
    type="text"
    value="123456789"
    readonly
    class="bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full focus:outline-none w-full"
    onclick="navigator.clipboard.writeText(this.value)"
  />
</div>

</template>

<script setup>
// No necesitas lógica JavaScript por ahora
</script>

<style scoped>
/* Puedes agregar estilos aquí si luego quieres personalizar más */
</style>
