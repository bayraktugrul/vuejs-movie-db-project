<template>
<div id="app">

  <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">Admin Paneli</a>
  <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span> </span>
              <span> </span>
              <span> </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <router-link class="nav-link" :to="{ path: '/admin'}" replace>Ana Sayfa</router-link>
      </li>

      <li class="nav-item">
        <router-link class="nav-link" :to="{ path: '/filmekle'}" replace>Film Ekle</router-link>
      </li>

      <li class="nav-item">
        <router-link class="nav-link" :to="{ path: '/diziekle'}" replace>Dizi Ekle</router-link>
      </li>

      <li class="nav-item">
        <router-link class="nav-link" :to="{ path: '/haberekle'}" replace>Haber Ekle</router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" :to="{ path: '/kullanicilariyonet'}" replace>Kullanıcıları Yönet</router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" :to="{ path: '/cikis'}" replace>Çıkış</router-link>
      </li>

    </ul>
  </div>
  </nav>

</div>
</template>

<script>


export default {
  data() {
    return {

    }
  }

}
</script>

<style scoped>


#app {
  display: block;
  width: 100%;
  top: 0;

}
.navbar {
  background-color: #F44336;
}

.navbar-toggler{
  padding: 10px 5px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}



li a {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: white;
  background-color: #F44336;
  text-align: center;
  padding: 20px 10px;
  text-decoration: none;
  font-size: 14px;
  font-weight: 500;
}


li a:hover {
  background-color: #FF5722;
}



.navbar-toggler:focus,
.navbar-toggler:active {
    outline: 0;
}

.navbar-toggler span {
   display: block;
   background-color: #444;
   height: 3px;
   width: 25px;
   margin-top: 4px;
   margin-bottom: 4px;
   -webkit-transform: rotate(0deg);
   -moz-transform: rotate(0deg);
   -o-transform: rotate(0deg);
   transform: rotate(0deg);
   position: relative;
   opacity: 1;
}

.navbar-toggler span:nth-child(1),
.navbar-toggler span:nth-child(3) {
   -webkit-transition: transform .35s ease-in-out;
   -moz-transition: transform .35s ease-in-out;
   -o-transition: transform .35s ease-in-out;
   transition: transform .35s ease-in-out;
}

.navbar-toggler:not(.collapsed) span:nth-child(1) {
    position: absolute;

    top: 20px;
    -webkit-transform: rotate(135deg);
    -moz-transform: rotate(135deg);
    -o-transform: rotate(135deg);
    transform: rotate(135deg);
    opacity: 0.9;
}

.navbar-toggler:not(.collapsed) span:nth-child(2) {
    height: 12px;
    visibility: hidden;
    background-color: transparent;
}

.navbar-toggler:not(.collapsed) span:nth-child(3) {
    position: absolute;

    top: 20px;
    -webkit-transform: rotate(-135deg);
    -moz-transform: rotate(-135deg);
    -o-transform: rotate(-135deg);
    transform: rotate(-135deg);
    opacity: 0.9;
}
.navbar-toggler {
     align-self: flex-end;
}



</style>
