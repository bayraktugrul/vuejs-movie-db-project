<template>
<div id="app">
  <app-header> </app-header>
  <responsive-movie-table></responsive-movie-table>
  <news-list> </news-list>
  <db-footer></db-footer>
</div>
</template>

<script>
import Header from './Header.vue';
import ResponsiveMovieTable from './ResponsiveMovieTable.vue';
import TrendingNews from './TrendingNews.vue';
import NewsList from './NewsPage/NewsList';
import Footer from './Footer.vue';

export default {
  components: {
    'app-header': Header,
    'responsive-movie-table': ResponsiveMovieTable,
    'trending-news': TrendingNews,
    'news-list': NewsList,
    'db-footer': Footer
  }

}
</script>

<style scoped>




</style>
