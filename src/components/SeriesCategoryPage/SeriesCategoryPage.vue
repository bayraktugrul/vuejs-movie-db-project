<template>
  <div id="app">
      <app-header> </app-header>
      <series-list></series-list>
      <db-footer></db-footer>
  </div>
</template>

<script>
import Header from '../Header.vue';
import SeriesList from './SeriesList.vue';
import Footer from '../Footer.vue';

export default {
  data() {
    return {

    }
  },
  components: {
      'app-header' : Header,
      'series-list' : SeriesList,
      'db-footer': Footer
    }

}
</script>

<style scoped>

p {
  color :white;
}

#app {
  background-color: #ffffff;
}


</style>
