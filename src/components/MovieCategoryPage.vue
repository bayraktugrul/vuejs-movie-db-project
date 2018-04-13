<template>
  <div id="app">
      <app-header> </app-header>
      <p>Kategori {{ $route.params.category_name }}</p>
  </div>
</template>

<script>
import Header from './Header.vue';

export default {
  components: {
      'app-header' : Header
    }

}
</script>

<style scoped>

p {
  color :white;
}



</style>
