$(function(){

 var fixHeader =150;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= fixHeader ) {
	       $('.tophead').css("display","block");
           $('.tophead').addClass('fix');
        }
        else {
            $('.tophead').removeClass('fix');
			$('.tophead').hide();
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});

$(document).ready(function() {
		$('.myMenu > li').bind('mouseover', openSubMenu);
		$('.myMenu > li').bind('mouseout', closeSubMenu);
		
		function openSubMenu() {
			$(this).find('ul').css('visibility', 'visible');	
		};
		
		function closeSubMenu() {
			$(this).find('ul').css('visibility', 'hidden');	
		};
				   
	});


$(function(){
var currentimg;
 $("#image img").click(function(){
var src=$(this).attr("src");
currentimg=$(this);
$("#mainimg").attr("src",src);
$("#frame").fadeIn();
$("#overlay").fadeIn();
 
 });
$("#overlay").click(function(){
$(this).fadeOut();
$("#frame").fadeOut();



});


$("#arrowright").click(function(){
 var next=$("#image");
 var img_list=next.find("img");

 if(i<img_list.length){
 var next_img=img_list[i];
 var try2=next_img.attributes[1];
 var try3=try2.firstChild;
 var try4=try3.wholeText.replace(/\"/g, "")
 $("#mainimg").attr("src",try4);
 i++;
 }
 else
 {
 i=0;
 var next_img=img_list[i];
 var try2=next_img.attributes[1];
 var try3=try2.firstChild;
 var try4=try3.wholeText.replace(/\"/g, "")
 $("#mainimg").attr("src",try4);
 i++;
 }
});
$("#arrowleft").click(function(){
var next=$("#image");
 var img_list=next.find("img");

 if(j>0){
 var next_img=img_list[j];
 var try2=next_img.attributes[1];
 var try3=try2.firstChild;
 var try4=try3.wholeText.replace(/\"/g, "")
 $("#mainimg").attr("src",try4);
 j--;
 }
 else
 {
 
 var next_img=img_list[i];
 var try2=next_img.attributes[1];
 var try3=try2.firstChild;
 var try4=try3.wholeText.replace(/\"/g, "")
 $("#mainimg").attr("src",try4);
 j=4;
 }




});
var j=4;
var i=0;
});






