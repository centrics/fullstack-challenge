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

    created() {
        var url = 'http://127.0.0.1:8000/produtos';
        fetch(url)
        .then( response => {
            return response.json();
        }).
        then(data => {
            this.products = data;
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