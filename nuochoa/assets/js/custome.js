$(document).ready(function () {

  // search
  $('#product_s').keyup(function(){
    var query = $(this).val();
    if(query != '')
    {
      $.ajax({
        url: "search.php",
        method: "POST",
        data: { query: query },
        success: function(data)
        {
          $('#productlist_s').show();
          $('#productlist_s').html(data);
        }
      })
    }
    else
    {
      $('#productlist_s').hide();
      $('#productlist_s').html("");
    }


  })


  // slide banner
  var swiper = new Swiper('.swiper-container', {
    loop: true,
    slidesPerView: 1,
    // slidesPerView: 'auto',
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // AOS.init();

  $('.btn-menu').click(function () {
    $('.categories-menu-mobile-hide').addClass('categories-menu-mobile-hide-active', 200);
  })
  $('.close-nav-mobile').click(function () {
    $('.categories-menu-mobile-hide').removeClass('categories-menu-mobile-hide-active', 200);
  })

  // detail tab img
  $('.tabImgDetail').addClass(function(index){
    return "tabImgDetail_" + index;
  });
  $('.buttonTabImgDetail').addClass(function(index){
    return "buttonTabImgDetail_" + index;
  });
  $('.buttonTabImgDetail_0').addClass('buttonTabImgDetail-active');
  $('.buttonTabImgDetail_0').click(function(){
    $('.tabImgDetail_0').show();
    $('.buttonTabImgDetail_0').addClass('buttonTabImgDetail-active');
    $('.buttonTabImgDetail_1, .buttonTabImgDetail_2, .buttonTabImgDetail_3, .buttonTabImgDetail_4, .buttonTabImgDetail_5').removeClass('buttonTabImgDetail-active');
    $('.tabImgDetail_1, .tabImgDetail_2, .tabImgDetail_3, .tabImgDetail_4, .tabImgDetail_5').hide();
  })
  $('.buttonTabImgDetail_1').click(function(){
    $('.tabImgDetail_1').show();
    $('.buttonTabImgDetail_1').addClass('buttonTabImgDetail-active');
    $('.buttonTabImgDetail_0, .buttonTabImgDetail_2, .buttonTabImgDetail_3, .buttonTabImgDetail_4, .buttonTabImgDetail_5').removeClass('buttonTabImgDetail-active');
    $('.tabImgDetail_0, .tabImgDetail_2, .tabImgDetail_3, .tabImgDetail_4, .tabImgDetail_5').hide();
  })
  $('.buttonTabImgDetail_2').click(function(){
    $('.tabImgDetail_2').show();
    $('.buttonTabImgDetail_2').addClass('buttonTabImgDetail-active');
    $('.buttonTabImgDetail_1, .buttonTabImgDetail_0, .buttonTabImgDetail_3, .buttonTabImgDetail_4, .buttonTabImgDetail_5').removeClass('buttonTabImgDetail-active');
    $('.tabImgDetail_0, .tabImgDetail_1, .tabImgDetail_3, .tabImgDetail_4, .tabImgDetail_5').hide();
  })
  $('.buttonTabImgDetail_3').click(function(){
    $('.tabImgDetail_3').show();
    $('.buttonTabImgDetail_3').addClass('buttonTabImgDetail-active');
    $('.buttonTabImgDetail_1, .buttonTabImgDetail_2, .buttonTabImgDetail_0, .buttonTabImgDetail_4, .buttonTabImgDetail_5').removeClass('buttonTabImgDetail-active');
    $('.tabImgDetail_0, .tabImgDetail_2, .tabImgDetail_1, .tabImgDetail_4, .tabImgDetail_5').hide();
  })
  $('.buttonTabImgDetail_4').click(function(){
    $('.tabImgDetail_4').show();
    $('.buttonTabImgDetail_4').addClass('buttonTabImgDetail-active');
    $('.buttonTabImgDetail_1, .buttonTabImgDetail_2, .buttonTabImgDetail_3, .buttonTabImgDetail_0, .buttonTabImgDetail_5').removeClass('buttonTabImgDetail-active');
    $('.tabImgDetail_0, .tabImgDetail_2, .tabImgDetail_3, .tabImgDetail_1, .tabImgDetail_5').hide();
  })
  $('.buttonTabImgDetail_5').click(function(){
    $('.tabImgDetail_5').show();
    $('.tabImgDetail_0, .tabImgDetail_2, .tabImgDetail_3, .tabImgDetail_4, .tabImgDetail_1').hide();
  })

  

})