<template>
  <div id="app">
      <app-header> </app-header>
      <news-list> </news-list>

  </div>
</template>

<script>
import Header from "./Header.vue";
import NewsList from "./NewsList.vue";
export default {
  data() {
    return {};
  },
  components: {
    "app-header": Header,
    "news-list" : NewsList
  }
};
</script>

<style scoped>
p {
  color: white;
}


</style>
