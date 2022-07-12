<script>
import LayoutApp from '@/Layouts/AppLayout.vue';

import { InteractsWithQueryBuilder, Tailwind2 } from '@protonemedia/inertiajs-tables-laravel-query-builder';

export default {
  mixins: [InteractsWithQueryBuilder],

  components: {
    Table: Tailwind2.Table,
    LayoutApp
  },

  props: {
    dependencias: Object
  },


  methods:{ 

    deleteItem(id){ 
        console.log(id)
    }
    
  }

};



/*const props = defineProps({
  dependencias: Object
})



const RootComponent = {
        components: {
            Table: Tailwind2.Table,
        },
};*/


</script>

<template>
    <LayoutApp title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Lista de Dependencias
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                   <Table
                        :filters="queryBuilderProps.filters"
                        :search="queryBuilderProps.search"
                        :columns="queryBuilderProps.columns"
                        :on-update="setQueryBuilder"
                        :meta="dependencias"
                    >
                        <template #head>
                        <tr>
                            <th @click.prevent="sortBy('id')">Item</th>
                            <th @click.prevent="sortBy('name')">Nombre</th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Acciones</span>
                            </th>
                        </tr>
                        </template>

                        <template #body>
                        <tr v-for="dependencia in dependencias.data" :key="dependencia.id">
                            <td>{{ dependencia.id }}</td>
                            <td>{{ dependencia.name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <inertia-link :href="route('dependency.edit', dependencia.id)">
                                    Editar
                                </inertia-link>
                                <button @click="deleteItem(dependencia.id)" class="text-indigo-600 hover:text-indigo-900">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        </template>
                    </Table>
                </div>
            </div>
        </div>
    </LayoutApp>
</template>