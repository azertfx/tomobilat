$(window).scroll(function() {if($(window).scrollTop()  > 400) {$("header").slideDown("fast");$("header").addClass("sticky");}else{$("header").removeClass("sticky");}});
$(window).ready(function() {$(".toggle-menu").click(function(){$("nav").toggleClass('active');});});
$(window).ready(function() {var list = $("nav ul li a");list.click(function (event) {var submenu = this.parentNode.getElementsByTagName("ul").item(0);if(submenu!=null){event.preventDefault();$(submenu).slideToggle('fast'); $(this).toggleClass('active');}});});
$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});
var owl = $('.gallery-offer');
owl.owlCarousel({
  items:1,
  loop:true,
  margin:0,
  dots:false,
  nav:true,
  navText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
  autoplay:true,
  autoplayTimeout:4000,
});
