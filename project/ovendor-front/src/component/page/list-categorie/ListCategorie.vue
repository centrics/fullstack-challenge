<template>
    <div>
        <app-list-categorie></app-list-categorie>
    </div>
</template>

<script>
import SideBarCategorie from './SideBarCategorie.vue';

export default {

    components: {
        'app-list-categorie': SideBarCategorie
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