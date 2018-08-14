<template>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-3 pr-0"> </div>
            <div class="col-9 text-left"> <small>122 eencontrados</small></div>
        </div>
        <div class="row">
            <div class="col-3">
                <app-sidebar>
                    <app-sidebar-product></app-sidebar-product>
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
import SideBarProduct from './SideBarProduct.vue';
import SideBar from '../../shared/SideBar.vue'
import ListItens from '../../shared/ListItens.vue'

export default {

    components: {
        'app-sidebar-product': SideBarProduct,
        'app-list-itens': ListItens,
        'app-sidebar': SideBar,
        
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