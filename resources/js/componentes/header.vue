
<template>
  <div class="min-h-screen bg-[rgba(241,241,240,1)]">
    <div class="bg-orange-400 text-white rounded-full px-10 py-4 shadow-md max-w-7xl mt-6 flex items-center justify-between mx-10">
      <h1 class="text-2xl font-bold">Agencia Ir</h1>

      <!-- MENÚ DE NAVEGACIÓN -->
      <div class="flex gap-10 text-lg font-medium relative">
        <!-- Enlaces (puedes reemplazar por <router-link> si usas Vue Router) -->
        <button class="text-white text-lg font-medium border-b-2 border-transparent hover:border-white transition duration-300">
          Servicios
        </button>

        <button class="text-white text-lg font-medium border-b-2 border-transparent hover:border-white transition duration-300">
          ¡Conócenos!
        </button>

        <!-- DROPDOWN "¡Contáctanos!" -->
        <div class="relative group">
          <button class="text-white text-lg font-medium border-b-2 border-transparent group-hover:border-white transition duration-300">
            ¡Contáctanos!
          </button>

          <!-- BOTÓN VER PRODUCTOS DENTRO DEL DROPDOWN -->
          <div class="absolute left-0 mt-2 hidden group-hover:block z-10 bg-white rounded-xl shadow-lg py-2">
            <button @click="mostrarTabla" class="block w-full text-left px-6 py-2 text-orange-500 hover:bg-orange-100 transition font-semibold whitespace-nowrap">
              De cucuta pal mundo!
            </button>
          </div>
        </div>

        <button class="text-white text-lg font-medium border-b-2 border-transparent hover:border-white transition duration-300">
          Regístrate
        </button>
      </div>
    </div>

    <!-- SECCIÓN DE PRODUCTOS -->
    <div class="p-8 max-w-7xl mx-auto">
      <table v-if="tablaVisible" class="mt-6 w-full border border-gray-200 rounded-xl shadow bg-white text-gray-800">
        <thead class="bg-gray-100 rounded-t-xl">
          <tr>
            <th class="p-3 border">ID</th>
            <th class="p-3 border">Nombre</th>
            <th class="p-3 border">Precio</th>
            <th class="p-3 border">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="producto in productos" :key="producto.id">
            <td class="p-3 border">{{ producto.id }}</td>
            <td class="p-3 border">{{ producto.nombre }}</td>
            <td class="p-3 border">${{ producto.precio.toFixed(2) }}</td>
            <td class="p-3 border flex gap-3">
              <button class="text-blue-600 hover:underline">Editar</button>
              <button @click="eliminarProducto(producto.id)" class="text-red-600 hover:underline">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

// Datos de prueba (reemplaza esto por props o una API si usas Laravel como backend)
const productos = ref([
  { id: 1, nombre: 'Producto A', precio: 10000 },
  { id: 2, nombre: 'Producto B', precio: 25000 },
  { id: 3, nombre: 'Producto C', precio: 35000 }
])

const tablaVisible = ref(false)

function mostrarTabla() {
  tablaVisible.value = !tablaVisible.value
}

function eliminarProducto(id) {
  if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
    productos.value = productos.value.filter(p => p.id !== id)
  }
}
</script>
