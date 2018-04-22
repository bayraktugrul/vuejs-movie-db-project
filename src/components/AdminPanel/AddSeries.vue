<template>
<div id="app">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Dizi Adı</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleTextarea">Dizi İçeriği</label>
      <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Dizi Görsel</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Dizi Fragman</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Dizi Puanı</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Dizi Ülkesi</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Sezon Sayısı</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <button type="submit" class="btn btn-primary">Dizi Ekle</button>
  </form>


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
#app{
  padding: 40px;
}

</style>
