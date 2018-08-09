import ListCategorie from './component/page/list-categorie/ListCategorie.vue';
import ListProduct from './component/page/list-product/ListProduct.vue';

export default [
    {path: "/", component: ListProduct },
    {path: "/categoria", component: ListCategorie}
]