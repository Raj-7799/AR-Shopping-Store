// scripts
$(window).ready(function(){
  $('.home').show();
  $('.about').hide();
  $('product_cat').hide();
  $('.store')
  $('.contact').hide();
  $('home_t').addClass('active');
})

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
  if(Scroll>=5000){
    $('.tint').css({
      'opacity':'0.5'
    })
  }
  })

//main-banner parallax end

//price tag
$('.products').hover(function(){
  $(this).children('.price-tag').addClass('visible');

  $(this).children('.product_display').css({
    'border': 'solid 3px rgb(84, 84, 84);'
  })
},function(){
  $('.price-tag').removeClass('visible');
  $(this).children('.product_display').css({
    'border': 'none'
  })
}
)
//price tag end

$('.contact_t').click(function(){
  $('.home').hide();
  $('.about').hide();
  $('product_cat').hide();
  $('.store')
  $('.contact').show();
  $('.contact_t').addClass('active');
  $('.home_t').removeClass('active');
  $('.about_t').removeClass('active');
  $('.store_t').removeClass('active');
  $('.products_t').removeClass('active');
})

$('.home_t').click(function(){
  $('.home').show();
  $('.home_t').addClass('active');
  $('.about').hide();
  $('product_cat').hide();
  $('.store').hide();
  $('.contact').hide();
  $('.contact_t').removeClass('active');
  $('.about_t').removeClass('active');
  $('.store_t').removeClass('active');
  $('.products_t').removeClass('active');
})

$('.about_t').click(function(){
  $('.home').hide();
  $('.home_t').removeClass('active');
  $('.about').show();
  $('product_cat').hide();
  $('.store').hide();
  $('.contact').hide();
  $('about_t').addClass('active');
  $('.contact_t').removeClass('active');
  $('.about_t').addClass('active');
  $('.store_t').removeClass('active');
  $('.products_t').removeClass('active');
})

$('.products_t').click(function(){
  $('.home').hide();
  $('.home_t').removeClass('active');
  $('.about').hide();
  $('product_cat').show();
  $('.store').hide();
  $('.contact').hide();
  $('about_t').addClass('active');
  $('.contact_t').removeClass('active');
  $('.about_t').removeClass('active');
  $('.store_t').removeClass('active');
  $('.products_t').addClass('active');
})

$('.store_t').click(function(){
  $('.home').hide();
  $('.home_t').removeClass('active');
  $('.about').hide();
  $('product_cat').hide();
  $('.store').show();
  $('.contact').hide();
  $('about_t').removeClass('active');
  $('.contact_t').removeClass('active');
  $('.about_t').removeClass('active');
  $('.products_t').removeClass('active');
  $('.store_t').addClass('active');
})
