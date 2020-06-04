<template>
  <div class="home">
    <table>
      <tr><th>名前</th><th>値段</th><th>個数</th></tr>
      <tr><td>{{pencil.name}}</td><td>{{pencil.price}}</td><td>{{pencil.qiantity}}</td></tr>
      <tr><td>{{eraser.name}}</td><td>{{eraser.price}}</td><td>{{eraser.qiantity}}</td></tr>
      <tr><td>{{note.name}}</td><td>{{note.price}}</td><td>{{note.qiantity}}</td></tr>
    </table>
  </div>
</template>
<script>
  export default{
    date(){
      return{
        pencil: {
          name:"鉛筆",
          price: 100,
          quantity: 0
        },
        eraser: {
          name:"消しゴム",
          price: 150,
          quantity: 0
        },
        note: {
          name:"ノート",
          price: 200,
          quantity: 0
        }
      }
    }
  }
</script>
<style scoped>
th{
  width: 30%;
  background:#000
  ;
}
td{
  width: 30%;
  background: #000
  ;
}
</style>