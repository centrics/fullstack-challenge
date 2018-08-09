<template>
    <nav class="container-fluid">
        <div class="row">
            <div class="col-3">
                <a href="#">
                    <div class="logo">
                        <h1>ovendor.com :)</h1>
                    </div>
                </a>
            </div>
            <div class="col-7">
                <nav class="nav pt-3 pl-0 justify-content-end ">
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

.logo{
    color: $cor_logo;
    background-color: $cor_fundo;
    font-weight: bold;
    border-radius: 4px;
    padding: 4px 4px 2px 2px;
}

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
