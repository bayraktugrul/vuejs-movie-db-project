<template>
  <div id="app">
      <app-header> </app-header>
      <movie-details></movie-details>
      <db-footer></db-footer>
  </div>
</template>

<script>
import Header from '../Header.vue';
import MovieDetails from './MovieDetails.vue';
import Footer from '../Footer.vue';

export default {
  data() {
    return {

    }
  },
  components: {
      'app-header' : Header,
      'movie-details' : MovieDetails,
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
