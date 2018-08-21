<template>
  <div>
    <div class="container-ovendor">
      <app-header></app-header>
      <app-content></app-content>
    </div>
      <app-footer></app-footer>
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
.container-ovendor {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  width: 1300px;
  margin-top: 60px;
}

</style>
