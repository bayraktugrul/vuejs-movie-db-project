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

    <div class="form-group">
    <label>Kategoriler</label>
    <div v-for="getCategory in getCategories">
    <input type="checkbox" :id="getCategory.category_id" :value="getCategory.category_id" v-model="movieData.categoryArray">
    <label>{{getCategory.category_name}} </label>
    </div>
    </div>

    <div class="form-group">
    <label>Yazarlar</label>
    <div v-for="getAuthor in getAuthors">
    <input type="checkbox" :id="getAuthor.author_id" :value="getAuthor.author_id" v-model="movieData.authorArray">
    <label>{{getAuthor.author_name}} {{getAuthor.author_surname}}</label>
    </div>
    </div>

    <div class="form-group">
    <label>Yönetmenler</label>
    <div v-for="getDirector in getDirectors">
    <input type="checkbox" :id="getDirector.director_id" :value="getDirector.director_id" v-model="movieData.directorArray">
    <label>{{getDirector.director_name}} {{getDirector.director_surname}}</label>
    </div>
    </div>

    <div class="form-group">
    <label>Oyuncular</label>
    <div v-for="getStar in getStars">
    <input type="checkbox" :id="getStar.star_id" :value="getStar.star_id" v-model="movieData.starArray">
    <label>{{getStar.star_name}} {{getStar.star_surname}}</label>
    </div>
    </div>

    <div class="form-group">
    <label>Firmalar</label>
    <div v-for="getCompany in getCompanies">
    <input type="checkbox" :id="getCompany.company_id" :value="getCompany.company_id" v-model="movieData.companyArray">
    <label>{{getCompany.company_name}}</label>
    </div>
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
        scene_type: 'movie',

        //many-to-many ilişkide ilişki tablosuna değer yazmak için gönderilen arrayler
        authorArray : [],
        directorArray : [],
        starArray : [],
        companyArray : [],
        categoryArray : []
      },

      //checkbox içinde gösterilen array değerleri. component oluşturulduğunda
      //API'ye istek atıp arrayleri çekiyor.
      getAuthors : [],
      getDirectors : [],
      getStars : [],
      getCompanies : [],
      getCategories : []
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
    },
    created() {
      this.$http
        .get("http://localhost:8888/api/api.php?getAuthorsForAddingScenes")
        .then(function(data) {
          this.getAuthors = data.body;
        });
      this.$http
        .get("http://localhost:8888/api/api.php?getDirectorsForAddingScenes")
        .then(function(data) {
          this.getDirectors = data.body;
        });
      this.$http
        .get("http://localhost:8888/api/api.php?getStarsForAddingScenes")
        .then(function(data) {
          this.getStars = data.body;
        });
        this.$http
          .get("http://localhost:8888/api/api.php?getCompaniesForAddingScenes")
          .then(function(data) {
            this.getCompanies = data.body;
          });
        this.$http
            .get("http://localhost:8888/api/api.php?getCategoriesForAddingScenes")
            .then(function(data) {
              this.getCategories = data.body;
            });

    }

}
</script>

<style scoped>
#app{
  padding: 40px;
}

</style>
