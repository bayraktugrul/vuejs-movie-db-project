<template>
<div id="app">
  <header>

    <nav v-bind:class='{black:scrolled}'>
      <div class="menu-icon">
        <a href="#">Menu</a>
      </div>

      <div class="logo">
        DizyFilm.com
      </div>

      <div class="menu">
        <ul>
          <li><a href="#">Ana Sayfa</a></li>
          <li><a href="#">Filmler</a></li>
          <li><a href="#">Diziler</a></li>
          <li><a href="#">Haberler</a></li>
          <li><a href="#">En İyiler</a></li>
          <li><a href="#">Hakkımızda</a></li>
        </ul>
      </div>
    </nav>

  </header>

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
header {
  font-family: "Helvetica Neue", sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  width: 100%;
  height: 100px;
  background-size: cover;
}

.content {
  width: 94%;
  margin: 4em auto;
  font-size: 20px;
  line-height: 30px;
  text-align: justify;
}

.logo {
  line-height: 60px;
  position: fixed;
  float: left;
  margin: 16px 46px;
  color: #fff;
  font-weight: bold;
  font-size: 20px;
  letter-spacing: 2px;
}

nav {
  position: fixed;
  width: 100%;
  line-height: 60px;
}

nav ul {
  line-height: 60px;
  list-style: none;
  background: rgba(0, 0, 0, 0);
  overflow: hidden;
  color: #fff;
  padding: 0;
  text-align: right;
  margin: 0;
  padding-right: 40px;
  transition: 1s;
}

nav.black ul {
  background: #000;
}

nav ul li {
  display: inline-block;
  padding: 16px 40px;
  ;
}

nav ul li a {
  text-decoration: none;
  color: #fff;
  font-size: 16px;
}

.menu-icon {
  line-height: 60px;
  width: 100%;
  background: #000;
  text-align: right;
  box-sizing: border-box;
  padding: 15px 24px;
  cursor: pointer;
  color: #fff;
  display: none;
}

p,
h {
  color: white;
}

@media(max-width: 786px) {

  .logo {
    position: fixed;
    top: 0;
    margin-top: 16px;
  }

  nav ul {
    max-height: 0px;
    background: #000;
  }

  nav.black ul {
    background-color: #000;
  }

  .showing {
    max-height: 34em;
  }

  nav ul li {
    box-sizing: border-box;
    width: 100%;
    padding: 24px;
    text-align: center;
  }

  .menu-icon {
    display: block;
  }

}
</style>
