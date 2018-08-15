<template>
    <div class="card card-item mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <img src="../../assets/sem-foto.png" class="img-thumbnail">
                </div>
                <div class="col-7 text-left card-information">
                    <div class="col-12 pl-0">
                        <router-link :to="'/produto'">
                            <h4 class="mt-2">{{ product.title }}</h4>
                        </router-link>
                    </div>
                    <div class="d-flex align-items-end">
                        
                        <router-link v-if="product.categorie === 1" to="/" class="btn-sm btn btn-secondary btn-category mr-2"> <font-awesome-icon icon="car" /> Caffee</router-link>
                        <router-link v-if="product.categorie === 2" to="/" class="btn-sm btn btn-secondary btn-category mr-2"> <font-awesome-icon icon="motorcycle" /> Caffee</router-link>
                        <router-link v-if="product.categorie === 3" to="/" class="btn-sm btn btn-secondary btn-category mr-2"> <font-awesome-icon icon="building" /> Caffee</router-link>
                        <router-link v-if="product.categorie === 4" to="/" class="btn-sm btn btn-secondary btn-category mr-2"> <font-awesome-icon icon="desktop" /> Caffee</router-link>
                        <router-link v-if="product.categorie === 5" to="/" class="btn-sm btn btn-secondary btn-category mr-2"> <font-awesome-icon icon="home" /> Caffee</router-link>
                        
                        <i>{{ 'hoje ' }}</i>
                        
                    </div>

                </div>
                <div class="col-2">
                    <h3>R$ {{ product.price }}</h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    props: ['product'],

    methods: {
        getIconByType() {
            return 'user';
        }
    },

    data () {
        return {
            icon: 'user'
        }
    }
}
</script>

<style lang="scss">
.card-item {
    height: 180px;
}

.card-body div{
    height: 50px;
}
.btn-category{
    background-color: rgb(210,214,222);
    border-color: rgb(210,214,222);
    color: black;
    border-radius: 200px;
}

.card-information {
}
</style>