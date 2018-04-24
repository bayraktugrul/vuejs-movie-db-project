<template>
<div id="app">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Oyuncu Adı</label>
      <input v-model="starData.star_name"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleTextarea">Oyuncu Soyadı</label>
      <input v-model="starData.star_surname"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Oyuncu Görsel</label>
      <input v-model="starData.star_photo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <button v-on:click="saveStar()" type="submit" class="btn btn-primary">Oyuncu Ekle</button>
  </form>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Şirket Adı</label>
      <input v-model="companyData.company_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Şirket Logo</label>
      <input v-model="companyData.company_logo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <button v-on:click="saveCompany()" type="submit" class="btn btn-primary">Şirket Ekle</button>
  </form>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Yönetmen Adı</label>
      <input v-model="directorData.director_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleTextarea">Yönetmen Soyadı</label>
      <input v-model="directorData.director_surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Yönetmen Görsel</label>
      <input v-model="directorData.director_photo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <button v-on:click="saveDirector()" type="submit" class="btn btn-primary">Yönetmen Ekle</button>
  </form>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Yazar Adı</label>
      <input v-model="authorData.author_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleTextarea">Yazar Soyadı</label>
      <input v-model="authorData.author_surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Yazar Görsel</label>
      <input v-model="authorData.author_photo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <button v-on:click="saveAuthor()" type="submit" class="btn btn-primary">Yazar Ekle</button>
  </form>

</div>
</template>

<script>

export default {
  data() {
    return {
        starData : {
          star_name: '',
          star_surname: '',
          star_photo : ''
        },
        companyData : {
          company_name: '',
          company_logo: ''
         }
         ,
        directorData : {
           director_name: '',
           director_surname: '',
           director_photo: ''
         },
         authorData: {
          author_name :'',
          author_surname : '',
          author_photo: ''
         }
    }
  },
  methods: {
        saveStar: function() {
          var data = this.starData;
          this.$http.post('http://localhost:8888/api/api.php?action=addStar', data, {emulateJSON: true}).then(function(response) {
              console.log('Success!:', response.message);
          }, function (response) {
              console.log('Error!:', response.data);
          });
        },
        saveCompany: function() {
          var data = this.companyData;
          this.$http.post('http://localhost:8888/api/api.php?action=addCompany', data, {emulateJSON: true}).then(function(response) {
              console.log('Success!:', response.message);
          }, function (response) {
              console.log('Error!:', response.data);
          });
        },
        saveDirector: function() {
          var data = this.directorData;
          this.$http.post('http://localhost:8888/api/api.php?action=addDirector', data, {emulateJSON: true}).then(function(response) {
              console.log('Success!:', response.message);
          }, function (response) {
              console.log('Error!:', response.data);
          });
        },
        saveAuthor: function() {
          var data = this.authorData;
          this.$http.post('http://localhost:8888/api/api.php?action=addAuthor', data, {emulateJSON: true}).then(function(response) {
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
