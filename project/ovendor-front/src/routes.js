import ListCategorie from './component/page/list-categorie/ListCategorie.vue';
import ListProduct from './component/page/list-product/ListProduct.vue';
import ListIten from './component/page/list-iten/ListIten.vue';

export default [
    {path: "/", component: ListProduct },
    {path: "/categoria/carro", component: ListCategorie},
    {path: "/produto", component: ListIten}
]