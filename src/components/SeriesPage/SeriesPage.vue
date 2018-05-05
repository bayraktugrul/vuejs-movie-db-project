<template>
  <div id="app">
      <app-header> </app-header>
      <series-all-list></series-all-list>
  </div>
</template>

<script>
import Header from '../Header.vue';
import SeriesAllList from './SeriesAllList.vue';

export default {
  components: {
      'app-header' : Header,
      'series-all-list' : SeriesAllList
    }

}
</script>

<style scoped>



</style>
