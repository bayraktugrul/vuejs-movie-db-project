<template>
  <div id="app">
      <app-header> </app-header>
      <movie-all-list></movie-all-list>
  </div>
</template>

<script>
import Header from '../Header.vue';
import MovieAllList from './MovieAllList.vue';

export default {
  components: {
      'app-header' : Header,
      'movie-all-list' : MovieAllList
    }

}
</script>

<style scoped>



</style>
