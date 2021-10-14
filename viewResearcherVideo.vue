<template>
    <div>
       <v-tabs v-model="patient" slider-color="primary" class="ma-15">
            <v-tab>
                Patient 1
            </v-tab>
            <v-tab>
                Patient 2
            </v-tab>
            <v-tab>
                Patient 3
            </v-tab>
            <v-tab>
                Patient 4
            </v-tab>
            <v-tab>
                Patient 5
            </v-tab>
            <v-tab>
                Patient 6
            </v-tab>
       </v-tabs>
       <v-tabs-items v-model="patient" class="ma-15">
       <v-tab-item>
           <template>
               <v-data-table
                   :headers="firstPatientHeader"
                   :items="firstPatient"
                   :items-per-page="100"
                   :height="400"
                   class="elevation-3"
>
               </v-data-table>
           </template>
       </v-tab-item>
       <v-tab-item>
           <template>
               <v-data-table
                   :headers="secondPatientHeader"
                   :items="secondPatient"
                   :items-per-page="100"
                   :height="400"
                   class="elevation-3"
>
               </v-data-table>
           </template>
       </v-tab-item>
       <v-tab-item>
           <template>
               <v-data-table
                   :headers="firstPatientHeader"
                   :items="thirdPatient"
                   :items-per-page="100"
                   :height="400"
                   class="elevation-3"
>
               </v-data-table>
           </template>
       </v-tab-item>
       <v-tab-item>
           <template>
               <v-data-table
                   :headers="secondPatientHeader"
                   :items="fourthPatient"
                   :items-per-page="100"
                   :height="400"
                   class="elevation-3"
>
               </v-data-table>
           </template>
       </v-tab-item>
       <v-tab-item>
           <template>
               <v-data-table
                   :headers="firstPatientHeader"
                   :items="fifthPatient"
                   :items-per-page="100"
                   :height="400"
                   class="elevation-3"
>
               </v-data-table>
           </template>
       </v-tab-item>
       <v-tab-item>
           <template>
               <v-data-table
                   :headers="secondPatientHeader"
                   :items="sixthPatient"
                   :items-per-page="100"
                   :height="400"
                   class="elevation-3"
>
               </v-data-table>
           </template>
       </v-tab-item>
       </v-tabs-items>
    </div>
</template>
<script>
import axios from "axios";
export default {
    data(){
        return{
            firstPatientHeader:[
                {
                    text: "X",
                    value: 'X',
                },
                {
                    text: "Y",
                    value: 'Y',
                },
                 {
                    text: "Time",
                    value: 'time',
                },
            ],
             secondPatientHeader:[
                {
                    text: "X",
                    value: 'X',
                },
                {
                    text: "Y",
                    value: 'Y',
                },
                 {
                    text: "Time",
                    value: 'time',
                },
                {
                    text: "Button",
                    value: 'button',
                },
                {
                    text: "Correct",
                    value: 'correct',
                },
            ],
            
            patient: "",
            firstPatient: [],
            secondPatient: [],
            thirdPatient: [],
            fourthPatient: [],
            sixthtPatient: [],
            fifthPatient: [],
        }
    },
    methods:{
        getPatientData(){
             axios.defaults.baseURL = 'http://127.0.0.1:8000/api';
              axios.post('/getFirstPatientData').then(res=>{
              if(res.status == 200){
               this.firstPatient = res.data;
               console.log("first",this.firstPatient)
              }
              axios.post('/getSecondPatientData').then(res=>{
              if(res.status == 200){
               this.secondPatient = res.data;
              }
              })
              axios.post('/getThirdPatientData').then(res=>{
              if(res.status == 200){
               this.thirdPatient = res.data;
              }
              })
              axios.post('/getFourthPatientData').then(res=>{
              if(res.status == 200){
               this.fourthPatient = res.data;
              }
              })
              axios.post('/getFifthPatientData').then(res=>{
              if(res.status == 200){
               this.fifthPatient = res.data;
              }
              })
              axios.post('/getSixthPatientData').then(res=>{
              if(res.status == 200){
               this.sixthPatient = res.data;
              }
              })
             }).catch(err=>{
               console.log(err)
             })
           }
        },
        mounted(){
            this.getPatientData()
        }
}
</script>