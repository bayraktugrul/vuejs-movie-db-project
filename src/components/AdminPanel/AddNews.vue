<template>
<div id="app">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Haber Başlığı</label>
      <input v-model="newsData.news_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleTextarea">Haber İçeriği</label>
      <textarea v-model="newsData.news_description" class="form-control" id="exampleTextarea" rows="5"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Haber Görseli</label>
      <input v-model="newsData.news_photo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <button v-on:click="save()" type="submit" class="btn btn-primary">Haber Ekle</button>
  </form>

</div>
</template>

<script>


export default {
  data() {
    return {
        newsData : {
          news_title: '',
          news_description: '',
          news_photo : ''
         }
    }
  },
  methods: {
        save: function() {
            var data = this.newsData;
            this.$http.post('http://localhost:8888/api/api.php?action=addNews', data, {emulateJSON: true}).then(function(response) {
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
