<template>
    <div>
       <v-card class="d-flex align-content-space-around flex-wrap" color="grey lighten-2" flat tile>
           <v-card class="mx-auto my-12" max-width="400">
              <v-img height="250" src="../assets/images/video1.png">
            </v-img> 
            <v-card-title>Parkinson's Disease Exercises: Balance</v-card-title>
            <v-card-actions class="justify-center align-center text-center">
                <v-btn class="justify-center align-center white--text text-capitalize" color="red" @click="gotToVideo('https://www.youtube.com/watch?v=uOljoOvycuo')">
                    Watch Video
                </v-btn></v-card-actions>
           </v-card>
            <v-card class="mx-auto my-12" max-width="400">
              <v-img height="250" src="../assets/images/video2.png">
            </v-img> 
            <v-card-title>Exercises for Parkinson's: Flexibility Exercises</v-card-title>
            <v-card-actions class="justify-center align-center text-center">
                <v-btn class="justify-center align-center white--text text-capitalize" color="red" @click="gotToVideo('https://www.youtube.com/watch?v=7CFLm1SL5EU')">
                    Watch Video
                </v-btn></v-card-actions>
           </v-card>
            <v-card class="mx-auto my-12" max-width="400">
              <v-img height="250" src="../assets/images/video3.png">
            </v-img> 
            <v-card-title>Chair Excercises for Parkinson's Patients: Improve Mobility, Posture, and Lateral Motion.</v-card-title>
            <v-card-actions class="justify-center align-center text-center">
                <v-btn class="justify-center align-center white--text text-capitalize" color="red" @click="gotToVideo('https://www.youtube.com/watch?v=EqHcDCYRdZU')">
                    Watch Video
                </v-btn></v-card-actions>
           </v-card>
            <v-card class="mx-auto my-12" max-width="400">
              <v-img height="250" src="../assets/images/video4.png">
            </v-img> 
            <v-card-title>Balance and Functional Exercises for patients with Parkinson disease & other movement disorders</v-card-title>
            <v-card-actions class="justify-center align-center text-center">
                <v-btn class="justify-center align-center white--text text-capitalize" color="red" @click="gotToVideo('https://www.youtube.com/watch?v=rPsegl-1mPc')">
                    Watch Video
                </v-btn></v-card-actions>
           </v-card>
       </v-card>
    </div>
</template>
<script>
export default {
    data(){
        return{

        }
    },
    methods:{
        gotToVideo(url){
            window.open(url,'_blank');
        }
    },
    mounted(){
        console.log("local storage",JSON.parse(localStorage.getItem('user_id')))
    }
}
</script>