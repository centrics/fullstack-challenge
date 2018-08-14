<template>
    <div class="card-body d-flex flex-column align-items-start">
        <router-link to="/categoria/carro"><font-awesome-icon icon="car" />  <span>Carros</span></router-link>
        <a href=""><font-awesome-icon icon="motorcycle" />  <span>Motos</span></a>
        <a href=""><font-awesome-icon icon="building" />  <span>Aluguel de imóveis</span></a>
        <a href=""><font-awesome-icon icon="desktop" />  <span>Eletrônicos</span></a>
        <a href=""><font-awesome-icon icon="home" />  <span>Para sua casa</span></a>
    </div>
</template>

<script>
export default {
}
</script>

<style lang="scss">
    placeh
.sidebar-input{
    border-radius: 0px;
    height: 40px;

    :focus{
        border-color: transparent;
    }
}

</style>

<style scoped lang="scss">
$altura: 13px;

.card-header {
    height: 100px;
}

.card-header {
    background-color: white;
}

.card-body {
    padding: 0px 0px 0px 0px;
}

a{
    width: 100%;
    text-align: left;
    padding-left: 5%;
    border: 1px solid #d2d6de;
    padding-top: $altura;
    padding-bottom: $altura;
    font-size: 18px;

}
</style>
