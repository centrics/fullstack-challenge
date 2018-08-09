<template>
  <div id="app" >
    <my-header></my-header>
    <div class="container-fluid">
        <div class="row">
          <div class="col-3">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>
          <div class="col-9">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>

        </div>
    </div>
  </div>
</template>

<script>

import MyHeader from './component/template/MyHeader.vue';

export default {

  name: 'app',

  components: {
    'my-header': MyHeader
  },

  data() {
    return {
      msg: 'Welcome to Your Vue.js App',
    }
  }
}
</script>

<style lang="scss">
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
  padding-left: 0px;
  margin-left: 0px;
}

h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
