<template>
    <footer class="container-fluid">
        <div class="row logo-footer">
            <div class="col-3">
                <a href="#">
                    <div class="logo">
                        <h1>ovendor.com :)</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
          
                <ul>
                    <li>Política de Responsabilidade</li>
                    <li>Ajuda</li>
                    <li>Minha conta</li>
                    <li>Anúncios</li>
                </ul>

            </div>
            <div class="col-3">
                <ul>
                    <li>Trabalhe conosco</li>
                    <li>Pesquisas populares</li>
                    <li>Dicas para sua negociação</li>
                </ul>
            </div>
            <div class="col-6">
                facebook
                Youtube
                Twitter
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
        data() {
            return {
                msg: 'Footer'
            }
        }
    }
</script>

<style lang="scss">

footer{
    background-color: rgb(52,73,94);
    color: white;
    position: fixed;
    bottom: 0px;
    height: 380px;
    padding-top: 70px;
}

.logo-footer {
    margin-bottom: 50px;
}

</style>
