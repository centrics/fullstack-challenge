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
                    :product="product" ></app-list-itens>

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

    created() {
        fetch('http://127.0.0.1:8000/products', {
            method: 'GET'
       })
        .then( response => {
            return response.json();
        })
        .then( data => {
            this.products = data.products;
        }) 
    },

    data () {
        return {
            products: []
        }
    }
}
</script>

<style lang="scss">
    
</style>