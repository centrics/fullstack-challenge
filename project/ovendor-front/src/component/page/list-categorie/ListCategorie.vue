<template>

    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-3 pr-0"> </div>
            <div class="col-9 text-left"> <small>122 encontrados</small></div>
        </div>
        <div class="row">
            <div class="col-3">
                <app-sidebar>
                    <app-sidebar-categorie></app-sidebar-categorie>
                </app-sidebar>
            </div>
            <div class="col-9">
                <app-list-itens v-for="product in products"
                    :key="product.cod" 
                    :price="product.price" 
                    :title="product.title"
                    :time="product.time"></app-list-itens>
            </div>
        </div>
    </div>
</template>

<script>
import SideBarCategorie from './SideBarCategorie.vue';
import ListItens from '../../shared/ListItens.vue'
import SideBar from '../../shared/SideBar.vue'


export default {

    components: {
        'app-sidebar-categorie': SideBarCategorie,
        'app-list-itens': ListItens,
        'app-sidebar': SideBar
    },

    beforeMount() {
        fetch('http://127.0.0.1:8000/categoria/carro', {
            method: 'GET'
       })
        .then( response => 
            console.log(response)
        )
    },

    data () {
        return {
            products: [
                {
                    cod: 1,
                    title: 'Carro 0 novo e barato só aqui',
                    price: 120,
                    time: 'otem 22:22'
                },
                {
                    cod: 2,
                    title: 'Moto 0 novo e Legal só aqui',
                    price: 1201,
                    time: 'otem 22:22'

                },
                {
                    cod: 3,
                    title: 'Casa 0 novo e barato só aqui',
                    price: 420,
                    time: 'otem 22:22'

                },
                {
                    cod: 4,
                    title: 'Carro 0 nada ve com a vida e barato só aqui',
                    price: 12120,
                    time: 'otem 22:22'
                },
                {
                    cod: 5,
                    title: 'Carro 0 um dia compro e barato só aqui',
                    price: 820,
                    time: 'otem 22:22'
                },
            ]
        }
    }
}
</script>

<style lang="scss">
    
</style>