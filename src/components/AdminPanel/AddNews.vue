<template>
<div id="app">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Haber Başlığı</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleTextarea">Haber İçeriği</label>
      <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Haber Görseli</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>

    <button type="submit" class="btn btn-primary">Haber Ekle</button>
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
