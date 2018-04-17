<template>
  <div id="app">

    <div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><img :src="last5News[0].news_photo" alt="img"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{last5News[0].news_date}}
                    </a></div>
                    <div class=""><a href="single.html" class="fh5co_good_font"> {{last5News[0].news_title}} </a></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div v-for="startingLoop in 4" class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img :src="last5News[startingLoop].news_photo" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{last5News[startingLoop].news_date}} </a></div>
                            <div class=""><a href="single.html" class="fh5co_good_font_2"> {{last5News[startingLoop].news_title}} </a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

  </div>
</template>

<script>
export default {
  data() {
    return {
      last5News: [],
      startingLoop : 1
    }
  },
  created() {
    this.$http.get('http://localhost:8888/api/api.php?getLast5News').then(function(data) {
      console.log(data);
      this.last5News = data.body;
    });
  }
}
</script>

<style scoped>



.fh5co_suceefh5co_height {
  height: 550px;
  overflow: hidden;
  width: 100%;
  position: relative
}

.fh5co_suceefh5co_height>img {
  height: 560px;
  width: 100%
}

.fh5co_suceefh5co_height_position_absolute {
  position: absolute;
  width: 100%;
  height: 100%;
  background: -moz-linear-gradient(top, transparent 0%, transparent 1%, rgba(0, 0, 0, 0.78) 100%);
  background: -webkit-linear-gradient(top, transparent 0%, transparent 1%, rgba(0, 0, 0, 0.78) 100%);
  background: linear-gradient(to bottom, transparent 0%, transparent 1%, rgba(0, 0, 0, 0.78) 100%);
  z-index: 5;
  top: 0
}


.fh5co_suceefh5co_height_position_absolute_font {
  position: absolute;
  width: 100%;
  height: 100%;
  color: #fff;
  z-index: 7;
  top: 75%;
  left: 5%;
  padding: 0 10px
}


.fh5co_suceefh5co_height_2 {
  height: 275px;
  overflow: hidden;
  width: 100%;
  position: relative
}

.fh5co_suceefh5co_height_2>img {
  height: 300px;
  width: 100%
}

.fh5co_suceefh5co_height_position_absolute_font_2 {
  position: absolute;
  width: 100%;
  height: 100%;
  color: #fff;
  z-index: 7;
  top: 65%;
  left: 5%;
  padding: 0 10px
}

.fh5co_good_font_2 {
  font-size: 19px;
  color: #fff;
  word-wrap: break-word;
  text-decoration: none
}


.fh5co_good_font_2:hover, .fh5co_good_font_2:focus {
  color: #fff;
  word-wrap: break-word;
  text-decoration: none
}
.js .animate-box {
  opacity: 0
}

.fh5co_good_font {
  color: #fff;
  font-size: 26px;
  word-wrap: break-word
}


.fh5co_good_font:hover, .fh5co_good_font:focus {
  color: #fff;
  word-wrap: break-word;
  text-decoration: none
}

.color_fff {
  color: #fff !important
}
.paddding {
  padding-left: 0 !important;
  padding-right: 0 !important
}

</style>
