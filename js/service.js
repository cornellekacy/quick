// JavaScript Document
//service
$(document).on('ready', function() {
 	"use strict"
  $("#service").owlCarousel({
    items : 3,
    lazyLoad : true,
    navigation : true,
	navigationText : ["<i class='fa fa-angle-double-left'></i>","<i class='fa fa-angle-double-right'></i>"],
  	autoPlay:5000
  }); 
 
});