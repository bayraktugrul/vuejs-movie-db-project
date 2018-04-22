<template>
<div id="app">
  <panel-header></panel-header>
  <add-series></add-series>
</div>
</template>

<script>
import PanelHeader from './PanelHeader.vue';
import AddSeries from './AddSeries.vue';

export default {
  components: {
    'panel-header': PanelHeader,
    'add-series' : AddSeries

  }

}
</script>

<style scoped>

#app{
  background-color: white;
}



</style>
