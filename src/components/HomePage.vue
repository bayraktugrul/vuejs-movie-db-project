<template>
  <div id="app">
    <app-header> </app-header>
    <slidebar></slidebar>
    <responsive-movie-table></responsive-movie-table>
    <trending-news></trending-news>

  </div>
</template>

<script>
import Header from './Header.vue';
import Slidebar from './Slidebar.vue';
import ResponsiveMovieTable from './ResponsiveMovieTable.vue';
import TrendingNews from './TrendingNews.vue';

export default {
  components: {
      'app-header' : Header,
      'slidebar' : Slidebar,
      'responsive-movie-table': ResponsiveMovieTable,
      'trending-news' : TrendingNews
    }

}
</script>

<style scoped>




</style>
