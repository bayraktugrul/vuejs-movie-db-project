<template>
<div id="app">


  <ul>
    <img src="https://www.iparts.pl/gfx/iparts/pl/warsztaty/zdjecia/644/s232392741.png" alt="">
    <li><a href="#">Ana Sayfa</a></li>
    <li><a href="#">Filmler</a></li>
    <li><a href="#">Diziler</a></li>
    <li><a href="#">Haberler</a></li>
    <li><a href="#">En İyiler</a></li>
    <li><a href="#">Hakkımızda</a></li>
  </ul>

</div>
</template>

<script>
export default {
  data() {
    return {
      scrolled: false
    };
  },
  methods: {
    handleScroll() {
      this.scrolled = window.scrollY > 0;
    }
  },
  created() {
    window.addEventListener('scroll', this.handleScroll);
  },
  destroyed() {
    window.removeEventListener('scroll', this.handleScroll);
  }

}
</script>

<style scoped>

#app {
  position: fixed;
  display: block;
  width: 100%;
  z-index: 9999;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ffd300;
}

li,img {
  float: left;
  margin: 5px;
}


li a {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  display: block;
  color: #231F20;
  text-align: center;
  padding: 30px 20px;
  text-decoration: none;
  font-size: 13px;
  font-weight: 500;
}

/* Change the link color to #111 (black) on hover */

li a:hover {
  background-color: #FFC107;
}
</style>
