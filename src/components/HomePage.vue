<template>
  <div id="app">
    <app-header> </app-header>
    <sidebar></sidebar>
  </div>
</template>

<script>
import Header from './Header.vue';
import Slidebar from './Slidebar.vue';
import MozaikGridNews from './MozaikGridNews.vue';

export default {
  components: {
      'app-header' : Header,
      'sidebar' : Slidebar,
      'mozaik-grid-news': MozaikGridNews
    }

}
</script>

<style scoped>


</style>
