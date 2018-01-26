
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

Vue.component('example', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});


var hamburger = document.querySelector('.hamburger'),
	headerNav = document.querySelector('#headerNav'),
	menuLinks = document.querySelectorAll('#headerNav ul li');

function toggleMenu(e){
		console.log("CLICKED");
		hamburger.classList.toggle('openButton');
		headerNav.classList.toggle('open');
	}


for (var i = 0;i < menuLinks.length; i++) {
		menuLinks[i].addEventListener("click", toggleMenu, false);
	}

	// for (var i = 0;i < workAnchor.length; i++) {
	// 	workAnchor[i].addEventListener("click", preventDefault, false);
	// }

	hamburger.addEventListener("click", toggleMenu, false);