<template>
    <div class="card card-item mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-3 text-center">
                    <img src="../../assets/sem-foto.png" class="img-thumbnail">
                </div>
                <div class="col-7 text-left ">
                    <div class="col-12 pl-0">
                        <h4 class="mt-2">{{ title }}</h4>
                    </div>
                    <div class="col-12 pl-0">
                        <router-link to="/" class="btn-sm btn btn-secondary btn-category"> <font-awesome-icon icon="coffee" /> Caffee</router-link>
                        
                        
                    </div>

                </div>
                <div class="col-2">
                    <h3>R$ {{ price }}</h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    props: ['title', 'price'],

    data () {
        return {
        }
    }
}
</script>

<style lang="scss">
.card-item {
    height: 180px;
}

.btn-category{
    background-color: rgb(210,214,222);
    border-color: rgb(210,214,222);
    color: black;
    border-radius: 200px;
}
</style>