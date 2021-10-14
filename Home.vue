<template>
  <div>
    <v-row class="text-center">
      <v-col cols="12">
        <v-card class="mx-auto my-auto mt-15" max-width="544">
            <v-card-title>Update your Data</v-card-title>
            <v-card-text>
              <v-select label="Select your role" v-model="selected" outlined :items="items">
              </v-select>
              <v-text-field label="Update Password" outlined 
              :append-icon="showEye ? 'mdi-eye':'mdi-eye-off'"
              :type="showEye ? 'text':'password'"
              counter
              @click:append="showEye = !showEye"
              :rules="[rules.required,rules.min]"
              v-model="password"
              >

              </v-text-field>
            </v-card-text>
            <v-card-actions class="text-center justify-center align-center mb-3">
              <v-btn color="primary" :loading="loading" :disabled="password == '' || selected==''" class="mb-4 text-capitalize" @click="saveUserInfo()">Save</v-btn>

            </v-card-actions>
        </v-card>

      </v-col>
    </v-row>
    <v-snackbar v-model="snackbar" :timeout="timeout" color="success" top>
      {{success_text}}
    </v-snackbar>
  </div>
</template>

<script>
import axios from "axios";

//can use everywhere 
  export default {
    name: 'HelloWorld',

    data: () => ({
      loading: false,
      items:['Patient','Researcher','Physician'],
      success_text: "You are login Successfully",
      snackbar: false,
      timeout: 2000,
      showEye: false,
      password: "",
      selected: "",
      rules:{
        required: value => !!value || 'Required',
        min: v => v.length >= 8 || 'Minimum 8 characters',
      } 
        }),
         methods:{
           saveUserInfo(){
             this.loading = true;
             let requestBody = {
               loggedInUserRole: this.selected,
               password: this.password,
              platform_id: this.$route.params.id
             };
              axios.defaults.baseURL = 'http://127.0.0.1:8000/api';
              axios.post('/update_user_data',requestBody).then(res=>{
              if(res.status == 200){
                if(this.selected == 'Patient'){
                  this.$router.push({ name: 'viewPatientData' })
                }
                else{
                  this.$router.push({ name: 'viewResearchVideos' })
                }
              }
             }).catch(err=>{
               console.log(err)
             })
           }
         },
         mounted(){
            localStorage.setItem('user_id', this.$route.params.id);
            console.log(this.$route.params.id,"query parameters")
            this.snackbar = true
            if(this.$route.params.id == 'viewPatient' || this.$route.params.id == 'viewPatient'){
              this.$router.push({ name: this.$route.name })
            }
         }

  }
</script>
