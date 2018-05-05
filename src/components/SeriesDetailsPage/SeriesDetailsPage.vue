<template>
  <div id="app">
      <app-header> </app-header>
      <series-details></series-details>
      <db-footer></db-footer>
  </div>
</template>

<script>
import Header from '../Header.vue';
import SeriesDetails from './SeriesDetails.vue';
import Footer from '../Footer.vue';

export default {
  data() {
    return {

    }
  },
  components: {
      'app-header' : Header,
      'series-details' : SeriesDetails,
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
