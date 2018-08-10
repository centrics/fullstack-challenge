<template>
    <nav class="container-fluid row">
        <div class="col-3">
            <a href="#">
                <img src="../assets/logo.png" class="img-fluid">
            </a>
        </div>
        <div class="col-7">
            <nav class="nav pt-3 pl-0">
                <ul>
                    <li><router-link to="/">Anúncio</router-link> </li>
                    <li><router-link to="/categoria">Ajuda</router-link></li>
                    <li><router-link to="/">Minha conta</router-link></li>
                </ul>
            </nav>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-outline-dark botao-anuncio">
                    Crie seu anúncio!
            </button>
        </div>
    </nav>
</template>

<script>
    export default {
        data() {
            return {
                msg: 'Header'
            }
        }
    }
</script>

<style lang="scss">

$cor_logo: white;
$cor_fundo: rgb(26,188,156);


.botao-anuncio{
    padding: 13px 20px 13px 20px;
    font-size: 18px;
    border-width: 2px;
}

.nav ul {
    width: 100%;
    text-align: right;
        li{
            display: inline;
            margin-left: 3%;
                a {
                    color: rgb(65, 190, 221);
                    font-weight: bold;
                }
        }
    
}

</style>
