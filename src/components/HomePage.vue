<template>
  <div id="app">
    <app-header> </app-header>
  </div>
</template>

<script>
import Header from './Header.vue';
import Sidebar from './Sidebar.vue';

export default {
  components: {
      'app-header' : Header,
      'sidebar' : Sidebar
    }

}
</script>

<style scoped>


</style>
