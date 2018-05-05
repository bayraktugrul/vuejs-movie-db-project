<template>
  <div id="app">
      <app-header> </app-header>
      <movie-list></movie-list>
      <db-footer></db-footer>
  </div>
</template>

<script>
import Header from '../Header.vue';
import MovieList from './MovieList.vue';
import Footer from '../Footer.vue';

export default {
  data() {
    return {

    }
  },
  components: {
      'app-header' : Header,
      'movie-list' : MovieList,
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
