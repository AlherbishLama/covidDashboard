require('./bootstrap');
import Vue from 'vue';


import appNameAndMap from './vue/appNameAndMap.vue';
import addCountryView from "./vue/addCountryView" ;
import countryDetailsView from "./vue/countryDetailsView" ;

const app = new Vue({
	el: '#app',
	components: { 
		appNameAndMap ,
		addCountryView,
		countryDetailsView
	},

});