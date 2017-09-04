(function ($) {
        
    $(document).ready(function()
    {
    
    	var imgpath;
    	var mdl_img;
    	mdl_img = $('.custom_modal .image_item');
    
    	$(".col_testimoni_image").each( function () {
          var _self = this;
          $(_self).click( function () {
          	imgpath = $(_self).find('img').attr('src');
          	
          	mdl_img.attr('src', imgpath);
          	$('.custom_modal').fadeToggle();
          });
        })
    
      $('.custom_modal .close_modal').click(function()
      {
      	$('.custom_modal').fadeToggle();
      });
    
      $('.navIconWrapper').click(function(){
          $(this).toggleClass('open');
          $('.menu_modal').toggleClass('is-open');
          
      });
    
      $('.menu_modal .moblemenu_ul li a').click(function(){
          $('.navIconWrapper').toggleClass('open');
          $('.menu_modal').toggleClass('is-open');
          
      });
    
      $('#sambal_merah').click(function(){
          $('#cakalang_red').css("display","block");
          $('#cakalang_green').css("display","none");
          
      });
    
      $('#sambal_hijau').click(function(){
          $('#cakalang_red').css("display","none");
          $('#cakalang_green').css("display","block");
          
      });
    
      //---Dekstop Menu-----
    
      $("#toAboutUs").click(function() {
          $('html,body').animate({
              scrollTop: $("#aboutus").offset().top},
              'slow');
      });
    
      $("#toProducts").click(function() {
          $('html,body').animate({
              scrollTop: $("#ourproduct").offset().top},
              'slow');
      });
    
      $("#toTestimonials").click(function() {
          $('html,body').animate({
              scrollTop: $("#testmoni").offset().top},
              'slow');
      });
    
      $("#toFag").click(function() {
          $('html,body').animate({
              scrollTop: $("#faq").offset().top},
              'slow');
      });
    
      //----Mobile Menu-------
    
      $("#toAboutUsMobile").click(function() {
          $('html,body').animate({
              scrollTop: $("#aboutus").offset().top},
              'slow');
      });
    
      $("#toProductsMobile").click(function() {
          $('html,body').animate({
              scrollTop: $("#ourproduct").offset().top},
              'slow');
      });
    
      $("#toTestimoniesMobile").click(function() {
          $('html,body').animate({
              scrollTop: $("#testmoni").offset().top},
              'slow');
      });
        
    });

}(jQuery));     	