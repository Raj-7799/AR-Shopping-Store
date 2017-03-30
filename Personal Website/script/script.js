// scripts


// nav-bar-dynamic
var open=0;
$("#menu").click(function(){
  var width = $(window).width();
  if(width<=775){
    if(open==0){
      $(".mobile-nav-isopen").css({"opacity":"1","height":"100%"});
      open=1;
      }
      else {
        $(".mobile-nav-isopen").css({"opacity":"0","height":"0"});
        open=0;
      }
    }
  }
)
//nav-bar-dynamic  end

//main-banner parallax

$(window).scroll(function(){
  var Scroll = $(this).scrollTop();
  if(Scroll<740){
    $('.text').css({
      'transform':'translate(0px,'+Scroll/5+'%)'
    })
    $('.bird').css({
      'transform':'translate(0px,-'+Scroll/75+'%)'
    })}
  if(Scroll>=200){
      $('.Title').addClass('display');
    }
  if(Scroll>=700){
    $('.product').addClass('display');
  }
  })

//main-banner parallax end

//price tag
$('.products').hover(function(){
  $(this).children('.price-tag').addClass('visible');
},function(){
  $('.price-tag').removeClass('visible');
}
)
//price tag end
