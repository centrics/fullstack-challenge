<template>
  <div>
    <div class="container-fluid" >
      <app-header></app-header>
      <app-content></app-content>
    </div>
    <div>
      <app-footer></app-footer>
    </div>
  </div>
  
</template>

<script>

import Header from './template/Header.vue';
import Content from './component/Content.vue';
import Footer from './template/Footer.vue';

export default {

  name: 'app',

  components: {
    'app-header': Header,
    'app-content': Content,
    'app-footer': Footer
  },

  data() {
    return {
      msg: 'Welcome to Your Vue.js App',
    }
  }
}
</script>

<style lang="scss">
.container-fluid {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  text-align: center;
  margin-top: 60px;
}

</style>
