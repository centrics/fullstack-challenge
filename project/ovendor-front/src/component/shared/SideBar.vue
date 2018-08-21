<template>
    <div class="card mb-3" >
        <div class="card-header d-flex align-items-center justify-content-center">
            <strong><h5>Filtre sua pesquisa</h5></strong> 
        </div>
        
        <input type="text" class="form-control sidebar-input" placeholder="Busque por palavra-chave">
        
        <slot></slot>
    </div>
</template>

<script>
export default {
}
</script>

<style lang="scss">
::placeholder {
    color: grey;
    opacity: 0,5;
}

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
    height: 70px;
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
