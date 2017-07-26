// JavaScript Document

(function() {
	"use strict";
	console.log(" SEAF fired");

	var navBar = document.querySelector('#main-menu'),
  links = document.querySelectorAll('.scrollNav');


function goscroll(e){
  var idNum = e.currentTarget.id;
  TweenMax.to(window, 1, {scrollTo:{y:"#section"+idNum,offset:800}});
}


for(var i=0; i<links.length; i++){
  links[i].addEventListener("click", goscroll, false);
}

	})();
