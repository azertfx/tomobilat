$(document).ready(function(){

    

     $('.materialboxed').materialbox();
	/*=Nav=*/
	$(".button-collapse").sideNav({
        edge: 'right',
        menuWidth: 200
    });

	$('select').material_select();

	$('.dropdown-button').dropdown({
	      inDuration: 300,
	      outDuration: 225,
	      constrain_width: true,
	      hover: true,
	      gutter: -25,
	      belowOrigin: true,
	});

	/*Map Script*/
	$(".jiha").on( "mousemove", function(e) {
		var $thisjiha = $( this );
		$('span#cityname').html($thisjiha.attr( "id" ));
		var allcitywidth = $("#allcity").width();
		$("#allcity").css({
	  		'left':e.pageX-allcitywidth/2-12,
	  		'top':e.pageY-60
	  	});
	});

	$( ".jiha" )
	.mouseenter(function() {
		$("#allcity").stop().fadeIn("slow");
	  })
	.mouseleave(function() {
		$("#allcity").stop().fadeOut("slow");
  	});

	$(".jiha").on( "click", function(e) {
		var $thisjiha = $( this );
		$('span#cityslidename').html($thisjiha.attr( "id" ));
		$("#cityslide")
			.fadeIn("slow")
			.css('top',e.pageY-300);
	});
	$(".closebtn").on( "click", function() {
		$("#cityslide").fadeOut("slow");
	});

	$("#slide-city").owlCarousel({
	  autoPlay: 3000, //Set AutoPlay to 3 seconds
	  items : 4,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3]

	});

	$("#owl-demo").owlCarousel({
           items : 3,
		itemsDesktop : [1199,3],
		autoPlay : true,
		stopOnHover : true,
  	});

     $(".pupupslider").owlCarousel({
          autoPlay: 3000,
          items : 3,
          itemsDesktop : [979,3],
          itemsDesktopSmall : [979,3],
          itemsTablet:  [768,2],
          itemsMobile:  [479,1],

     });

      /*CARD VIDEO + ADS HOVER*/
      $('.allcards>a, .ad>.card-image>a').hover(function(){
          $(this).find('.com_like, .b').css("display", "block");
          $(this).find('.s, .n').css("display","none");
      }, function(){
          $(this).find('.com_like, .b').css("display", "none");
          $(this).find('.s, .n').css("display","block");
      });

      /*===Slider annonces Footer===*/
      $("#owl-example").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
      });

      $(".owl-example2").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 2,
            margin: '20px',
            itemsDesktop : [1199,2],
            itemsDesktopSmall : [979,2]
      });
     $('.modal-trigger').leanModal({
         ready : function(){
             $('section, nav, article, footer').css('filter','blur(8px)');
         },
         complete : function(){
             $('section, nav, article, footer').css('filter','none');
         }
     });

});

/*Btn Scroll To Section*/
$("#btnToTop, .tabs li a").click(function() {
    $('html, body').animate({
        scrollTop: $("#homePageSection").offset().top - $("#nav_home").height()
    }, 500);
});

$(".bodystyle ul>li>a>img, .jiha, #btnshrchrslt").click(function() {
    $('html, body').animate({
        scrollTop: $(".content_number").offset().top - $("#nav_home").height()
    }, 500);
});

$( ".content_number select" ).change(function() {
    $('html, body').animate({
        scrollTop: $(".content_number").offset().top - $("#nav_home").height()
    }, 500);
});

$( "#test-swipe-4 select, .content_number select" ).change(function() {
    if ($('option:selected', this).attr('value') != "0") {
        $( this ).siblings("input.select-dropdown").attr('id', 'seloptn');
        $( this ).siblings("span.caret").attr('id', 'seloptnfls');
    }else {
        $( this ).siblings("input.select-dropdown, span.caret").removeAttr('id');
    };
});

var dtelecntnt = $(".teleclck3 h2").text();
var dtelefirstletter = dtelecntnt.slice(0,4);
var dtelemasqueletter = dtelefirstletter+"------";
$(".teleclck3 h2").text(dtelemasqueletter);
$("#teleclck3").click(function(){
    $(".teleclck3 h2").text(dtelecntnt);
    $("#teleclck3").hide();
});

var telecntnt = $(".teleclck h2").text();
var telefirstletter = telecntnt.slice(0,4);
var telemasqueletter = telefirstletter+"------";
$(".teleclck h2").text(telemasqueletter);
$(".teleclck2 h2").text(telemasqueletter);
$("#teleclck, #teleclck2").click(function(){
    $(".teleclck h2").text(telecntnt);
    $(".teleclck2 h2").text(telecntnt);
    $("#teleclck, #teleclck2").hide();
});

var emlcntnt = $(".emlclck h2").text();
var emlfirstletter = emlcntnt.slice(0,4);
var emlmasqueletter = emlfirstletter+"------";
$(".emlclck h2").text(emlmasqueletter);
$(".emlclck2 h2").text(emlmasqueletter);
$("#emlclck, #emlclck2").click(function(){
    $(".emlclck h2").text(emlcntnt);
    $(".emlclck2 h2").text(emlcntnt);
    $("#emlclck, #emlclck2").hide();
});

var adrcntnt = $(".adrclck h2").text();
var adrfirstletter = adrcntnt.slice(0,4);
var adrmasqueletter = adrfirstletter+"------";
$(".adrclck h2").text(adrmasqueletter);
$(".adrclck2 h2").text(adrmasqueletter);
$("#adrclck, #adrclck2").click(function(){
    $(".adrclck h2").text(adrcntnt);
    $(".adrclck2 h2").text(adrcntnt);
    $("#adrclck, #adrclck2").hide();
});

// Set the date we're counting down to
var getYear = $(".adddeadtime #getYear").text();
var getMonth = $(".adddeadtime #getMonth").text();
var getDay = $(".adddeadtime #getDay").text();
var getHour = $(".adddeadtime #getHour").text();
var getMin = $(".adddeadtime #getMin").text();
var getSec = $(".adddeadtime #getSec").text();
var countDownDate = new Date( getMonth + " " + getDay + ", " + getYear + " " + getHour + ":" + getMin + ":" + getSec ).getTime();



$("#strtcnslbtn").click(function(){
    $(".frstcnslbtn").fadeIn(1000);
    $("#strtcnslbtn").hide();
});
$("#frstcnslbtn").click(function(){
    $(".scndcnslbtn").fadeIn(1000);
    $("#frstcnslbtn").hide();
});
$("#scndcnslbtn").click(function(){
    $(".thrdcnslbtn").fadeIn(1000);
    $("#scndcnslbtn").hide();
});
$("#thrdcnslbtn").click(function(){
    $(".frthcnslbtn").fadeIn(1000);
    $(".lastshcnslpg").fadeIn(1000);
    $("#thrdcnslbtn").hide();
});
