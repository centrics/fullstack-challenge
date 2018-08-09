<template>
    <div class="container-fluid">
        <div class="col-3">
            <app-sidebar-product></app-sidebar-product>
        </div>
        <div class="col-9">
            algo
        </div>
    </div>
</template>

<script>
import SideBarProductVue from './SideBarProduct.vue';

export default {

    components: {
        'app-sidebar-product': SideBarProductVue
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