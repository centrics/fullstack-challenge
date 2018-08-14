<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 text-left">
                <div class="row"></div>
                <div class="row">
                    <div class="col-12">
                        <h3>{{ product.title }}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <router-link to="/" class="btn-sm btn btn-secondary"> <font-awesome-icon icon="user" /> Caffee</router-link>
                        <small>12:12 hoje</small>
                    </div>
                    <div class="col-6">
                        <h2 class="text-right">{{ product.price }}</h2>
                    </div>
                </div>
                
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</template>

<script>

export default {

    data () {
        return {
            product: {
                'title': 'algo logo por um preço baratin',
                'price': 120,
            }
        }
    }
}
</script>

<style lang="scss">
    
</style>