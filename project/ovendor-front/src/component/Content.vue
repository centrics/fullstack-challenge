<template>
    <div>
        <app-list-product></app-list-product>
        <!-- <app-list-categorie></app-list-categorie> -->
    </div>
</template>

<script>
import ListProduct from './page/list-product/ListProduct.vue';
import ListCategorie from './page/list-categorie/ListCategorie.vue';

export default {

    components: {
        'app-list-product': ListProduct,
        'app-list-categorie': ListCategorie
    },

    data () {
        return {
            msg: 'Content'
        }
    }
}
</script>

<style lang="scss">
    
</style>