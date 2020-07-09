<template>
  <div id="app">
    <vue-dropzone ref="myVueDropzone"
      id="dropzone" :options="config" @vdropzone-complete="afterComplete" v-on:vdropzone-sending="sendingEvent" ></vue-dropzone>
    <span style="display:inline-block; width: YOURWIDTH;"></span>
    <button id="uploadButton" v-on:click="processQueue">Upload</button>
  </div>
</template>

<script>

import vueDropzone from "vue2-dropzone";

export default {
  data: () => 
  ({
    config: {
      url: "http://localhost:8000/uploadFile",
            addRemoveLinks: true,
            dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> DROP YOUR FILES HERE",
      headers: {
          'Cache-Control': null,
          'X-Requested-With': null,
        },
      autoProcessQueue: false ,
      uploadMultiple: true,
      maxFiles: 8,
      parallelUploads: 8 ,
         }
  }),
  
  components: 
    {
     vueDropzone
    },
  
  methods: 
   {
     afterComplete(file) 
      {
      console.log(file);
      },
     processQueue() 
      {
      this.$refs.myVueDropzone.processQueue();
      }
    
   }
};
</script>

<style scoped>

#uploadButton{
  margin:auto;
  display:block;
}
#uploadButton {
padding:10px 15px;
  font-family:helvetica;
  font-size:16px;
  font-weight:100;
  color:#fff;
  background: #587286;
  border:0;
  font-weight:100;
}

#uploadButton:hover{
  background: #3B5C76;
}

</style>