import Vue from "vue";
import VueRouter from 'vue-router';
import Home from "../components/Home"
import ResearchVideos from '../components/viewResearcherVideo.vue'
import PatientData from '../components/viewPatientData.vue'
Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes:[
        {
        path: '/login/:id',
        name: 'updateUserInfo',
        component: Home
        },
        {
        path: '/viewResearchVideos',
        name: 'viewResearchVideos',
        component: ResearchVideos
        },
        {
        path: '/viewPatientData',
        name: 'viewPatientData',
        component: PatientData
        }
    ]
})