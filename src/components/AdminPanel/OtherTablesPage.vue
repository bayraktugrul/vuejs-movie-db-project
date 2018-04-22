<template>
<div id="app">
  <panel-header></panel-header>
  <add-others></add-others> 
</div>
</template>

<script>
import PanelHeader from './PanelHeader.vue';
import AddMovie from './AddMovie.vue';
import AddNews from './AddNews.vue';
import AddOthers from './AddOthers.vue';

export default {
  components: {
    'panel-header': PanelHeader,
    'add-others' : AddOthers

  }

}
</script>

<style scoped>

#app{
  background-color: white;
}



</style>
