<template>
  <div id="app">
    <FileUpload />

  </div>
</template>

<script>
import FileUpload from './components/FileUpload.vue'

export default {
  name: 'App',
   components: {
    FileUpload
  }
}
</script>

<style lang="css">
  @import './assets/vuedropzone.css';
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");


</style>
