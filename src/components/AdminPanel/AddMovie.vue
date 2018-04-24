<template>
<div id="app">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Film Adı</label>
      <input v-model="movieData.scene_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleTextarea">Film İçeriği</label>
      <textarea v-model="movieData.scene_description" class="form-control" id="exampleTextarea" rows="5"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Film Görsel</label>
      <input v-model="movieData.scene_photo"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Film Fragman</label>
      <input v-model="movieData.scene_trailer"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Film Puanı</label>
      <input v-model="movieData.scene_rating"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Film Ülkesi</label>
      <input v-model="movieData.scene_country"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <button v-on:click="save()" class="btn btn-primary">Film Ekle</button>
  </form>


</div>
</template>

<script>


export default {
  data() {
    return {
      movieData : {
        scene_name: '',
        scene_description: '',
        scene_trailer : '',
        scene_photo : '',
        scene_rating: '',
        scene_country: '',
        scene_views: '1',
        scene_type: 'movie'
       }
    }
  },
  methods: {
        save: function() {
            var data = this.movieData;
            this.$http.post('http://localhost:8888/api/api.php?action=addMovie', data, {emulateJSON: true}).then(function(response) {
                console.log('Success!:', response.message);
            }, function (response) {
                console.log('Error!:', response.data);
            });

        }
    }

}
</script>

<style scoped>
#app{
  padding: 40px;
}

</style>
