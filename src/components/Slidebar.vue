<template>
<div id="app">
    <b-carousel   id="carousel1"
                  style="text-shadow: 1px 1px 2px #333;"
                  controls
                  indicators
                  :interval="4000"
                  img-width="1024"
                  img-height="480"
                  v-model="slide"
                  @sliding-start="onSlideStart"
                  @sliding-end="onSlideEnd"
      >
      <div class="gradient">
        <!-- Text slides with image -->
        <b-carousel-slide  caption="First slide"
                          text="Nulla vitae elit libero, a pharetra augue mollis interdum."
                          img-src="https://www.hdwallpapers.in/walls/pirates_of_the_caribbean_dead_men_tell_no_tales_4k-wide.jpg"
        ></b-carousel-slide>

        <b-carousel-slide caption="First slide"
                          text="Nulla vitae elit libero, a pharetra augue mollis interdum."
                          img-src="https://www.hdwallpapers.in/walls/bob_odenkirk_better_call_saul_4k-wide.jpg"
        ></b-carousel-slide>
        <!-- Slides with image only -->
        <b-carousel-slide img-src="https://www.hdwallpapers.in/walls/logan_hugh_jackman-wide.jpg">
        </b-carousel-slide>
        <!-- Slides with custom text -->
        <!-- Text slides with image -->
        <b-carousel-slide caption="First slide"
                          text="Nulla vitae elit libero, a pharetra augue mollis interdum."
                          img-src="https://www.hdwallpapers.in/walls/la_la_land_5k-HD.jpg"
        ></b-carousel-slide>

      </div>
      </b-carousel>




</div>
</template>

<script>


export default {
  data() {
    return {
      
    }
  }

  }

}
</script>

<style scoped>

#app {
  display: block;
}

.gradient {

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

#carousel1 {
  width: 100%;
  height: 400px;
  overflow: hidden;
object-fit: fill;
}

#carousel1, b-carousel-slide {
  display:block !important;
  width: 100%;
  height: auto;
  max-height: 400px;


  }


/*
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

*/
</style>
