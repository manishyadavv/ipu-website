(function(){
$('.nav-toggle').on('click',function(){
$('.main-navigation').toggleClass('open');
});
});


$("document").scroll(function(){



if($(window).width()<=700){
$(function(){

 var fixHeader =150;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= fixHeader ) {
	       $('.topheadmobile').css("display","block");
           $('.topheadmobile').addClass('fixmobile');
		   
        }
        else {
            $('.topheadmobile').removeClass('fixmobile');
			$('.topheadmobile').hide();
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});


}
else{
$('.topheadmobile').hide();

}

});


