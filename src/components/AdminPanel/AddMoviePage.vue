<template>
<div id="app">
  <panel-header></panel-header>
  <add-movie></add-movie>
</div>
</template>

<script>
import PanelHeader from './PanelHeader.vue';
import AddMovie from './AddMovie.vue';

export default {
  components: {
    'panel-header': PanelHeader,
    'add-movie' : AddMovie

  }

}
</script>

<style scoped>

#app{
  background-color: white;
}



</style>
