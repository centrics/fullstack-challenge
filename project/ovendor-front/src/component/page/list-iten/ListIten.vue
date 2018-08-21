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
            <div class="col-4">
            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="../../../assets/batpalio.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="../../../assets/batpalio.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="../../../assets/batpalio.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3" >
                    <div class="card-header d-flex align-items-center justify-content-center">
                        <strong><h5>Filtre sua pesquisa</h5></strong> 
                    </div>
                    
                    <input type="text" class="form-control sidebar-input" placeholder="Busque por palavra-chave">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <p>{{ product.description }}</p>
            </div>
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
                'description':'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt mattis leo in venenatis. Integer venenatis sem urna, a malesuada enim euismod a. Nulla facilisi. Fusce at auctor lacus. Vivamus sit amet tortor malesuada, consectetur sem non, viverra nisi. Integer ut placerat velit, eu ullamcorper diam. Donec vehicula dictum lacus, semper elementum est porta vitae. Morbi lobortis leo in dictum consectetur. Fusce hendrerit, risus sit amet suscipit aliquet, leo dui cursus turpis, ullamcorper molestie orci leo ut dui. Nunc et lobortis purus. Vivamus ac magna varius, commodo mi id, aliquet nisi. Ut cursus tellus sem. Phasellus vulputate tortor risus. Sed nec ante volutpat, ornare neque id, euismod estUt ullamcorper mollis consequat. Sed congue felis vel ex euismod porta. Mauris ac mollis justo, id rhoncus lacus. Cras quis sem vitae libero consectetur bibendum et at tortor. Mauris eget eleifend turpis. Donec nec gravida erat. Mauris commodo arcu at quam egestas, quis volutpat lectus porta. Morbi et dapibus justo, at laoreet libero. Vivamus facilisis fermentum vestibulum. Cras ex nulla, tristique eu ultrices at, posuere quis est.'
            }
        }
    }
}
</script>

<style lang="scss">
    
</style>