<template>
  <div id="app">
    <app-header> </app-header>
    <slidebar></slidebar>
    <responsive-movie-table></responsive-movie-table>
  </div>
</template>

<script>
import Header from './Header.vue';
import Slidebar from './Slidebar.vue';
import ResponsiveMovieTable from './ResponsiveMovieTable.vue';
import NewsHome from './NewsHome.vue';

export default {
  components: {
      'app-header' : Header,
      'slidebar' : Slidebar,
      'responsive-movie-table': ResponsiveMovieTable,
      'news-home' : NewsHome
    }

}
</script>

<style scoped>



</style>
