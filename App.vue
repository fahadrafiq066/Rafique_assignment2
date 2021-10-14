<template>
  <v-app>
    <v-app-bar
      app
      color="primary"
      dark
    >
    Parkin disease managment system
      <div class="d-flex align-center">
      </div>

      <v-spacer></v-spacer>
    <div v-if="$route.name=='viewPatientData'"><v-chip>Videos</v-chip></div>
    <div @click="Logout()" style="cursor:pointer" class="ml-2">Logout</div>
    </v-app-bar>

    <v-main>
      <router-view/>
    </v-main>
  </v-app>
</template>

<script>
 import axios from "axios";
export default {
 
  name: 'App',

  components: {
  },

  data: () => ({
    //
  }),
  updated(){
    console.log(this.$route.name)
  },
  methods:{
    Logout(){
      let id =  JSON.parse(localStorage.getItem('user_id'));
      let requestBody = {
          platform_id: id
      };
      console.log("request",requestBody);
      axios.defaults.baseURL = 'http://127.0.0.1:8000/api';
      axios.post("/logout",requestBody);
      let new_url = axios.defaults.baseURL = 'http://127.0.0.1:8000';
      window.open(new_url,'_self');
    }
  }
};
</script>
