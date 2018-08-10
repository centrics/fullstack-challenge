<template>
    <footer class="container-fluid">
        <div class="row logo-footer text-left">
            <div class="col-3">
                <a href="#">
                    <div class="logo">
                        <h2>ovendor.com :)</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-3 d-flex flex-column align-items-start">
                <a href=""><span>Política de Responsabilidade</span></a>
                <a href=""><span>Ajuda</span></a>
                <a href=""><span>Minha conta</span></a>
                <a href=""><span>Anúncios</span></a>
            </div>
            <div class="col-3 d-flex flex-column align-items-start">
                <a href=""><span>Trabalhe conosco</span></a>
                <a href=""><span>Pesquisas populares</span></a>
                <a href=""><span>Dicas para sua negociação</span></a>
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

<style scoped lang="scss">

footer{
    background-color: rgb(52,73,94);
    color: white;
    bottom: 0px;
    height: 380px;
    padding-top: 70px;
}

.logo-footer {
    margin-bottom: 20px;
}

a{  
    margin-bottom: 20px;
    color: white;
    font-size: 16px;
    font-style: bold;
    :hover{
        color: white;
    }
}

</style>
