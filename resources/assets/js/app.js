
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue(
	{
	    el: '#pay',
	    data: {
			crediti_20: 0,
			crediti_50: 0,
	    	typePayment: {
	    		id: null,
	    		name: null
	    	}
	    },
	    methods: {
	    	selectTypePayment: function(type, name){
	    		this.typePayment.name = name;
	    		return this.typePayment.id = type;
	    	}
	    },
	    computed: {
	    	total: function(){
	    		return this.crediti_20*20 + this.crediti_50*50
	    	}
	    }
	});