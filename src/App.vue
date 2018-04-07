<template>
<div id="app">

  <router-view/>
</div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style >
body {
  height: 100%;
  background: url("assets/bg.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
