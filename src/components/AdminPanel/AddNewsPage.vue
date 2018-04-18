<template>
<div id="app">
  <panel-header></panel-header>
  <add-news></add-news>
</div>
</template>

<script>
import PanelHeader from './PanelHeader.vue';
import AddMovie from './AddMovie.vue';
import AddNews from './AddNews.vue';

export default {
  components: {
    'panel-header': PanelHeader,
    'add-news' : AddNews

  }

}
</script>

<style scoped>

#app{
  background-color: white;
}



</style>
