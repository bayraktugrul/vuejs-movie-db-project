<template>
<div id="app">
  <carousel :loop="true" :autoplay="true" :autoplayTimeout="4000" :per-page="1" :navigationEnabled="false" :paginationEnabled="false">
    <slide>
      <div class="gradient">
        <img src="https://wallpapersite.com/images/pages/pic_w/3852.jpg" alt="">
        <h2 class="imgtext">Haber yazısı burada yer alacak!!</h2>
      </div>

    </slide>
    <slide>
      <div class="gradient">
        <img src="https://wallpaperscraft.com/image/need_for_speed_2014_aaron_paul_tobey_marshall_dino_brewster_dominic_cooper_imogen_poots_julia_maddon_93024_1680x1050.jpg" alt="">
        <h2 class="imgtext">Haber yazısı burada yer alacak!!</h2>
      </div>
    </slide>
    <slide>
      <div class="gradient">
        <img src="https://wallpaperscraft.com/image/hitman_agent_47_rupert_friend_art_104224_3840x2160.jpg" alt="">
        <h2 class="imgtext">Haber yazısı burada yer alacak!!</h2>
      </div>
    </slide>
    <slide>
      <div class="gradient">
        <img src="https://wallpaperscraft.com/image/harry_potter_and_the_deathly_hallows_severus_snape_alan_rickman_96164_1920x1200.jpg" alt="">
        <h2 class="imgtext">Haber yazısı burada yer alacak!!</h2>
      </div>
    </slide>
  </carousel>

  <p>1</p>
  <p>1</p>
  <p>1</p>
  <p>1</p>
  <p>1</p>
  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>
  <p>1</p>
  <p>1</p>
  <p>1</p>
  <p>1</p>

  <p>1</p>

  <p>1</p>
  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>

  <p>1</p>
  <p>1</p>


</div>
</template>

<script>
export default {
  data() {
    return {

    };
  }

}
</script>

<style scoped>
#app {
  width: 100%;
  height: 550px;
  position: relative;
   display: inline-block;
}

carousel,
slide {
  margin: 0px;
  padding: 0px;
}

.gradient {
  width: 100%;
  height: 550px;
  display:table;
  background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.55) 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.55)), color-stop(100%, rgba(0, 0, 0, 0)));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.55) 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.55) 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.55) 100%);
  /* IE10+ */
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.55) 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000', GradientType=0);
  /* IE6-9 */

}

img {
  position:absolute;
  z-index:-1;
  display:block;
  width: 100%;
  height: auto;
  overflow: hidden;
}

h2{
  font-family: Century Gothic, sans-serif;

}

.imgtext{
    z-index: 100;
    position: absolute;
    color: white;
    font-size: 30px;
    font-weight: 600;
    text-transform: uppercase;
    text-shadow: 0px -1px 30px rgba(0, 0, 0, 0.39);
    left: 150px;
    top: 450px;
}
</style>
