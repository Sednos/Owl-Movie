$(document).ready(function() {
  $('.barre').on('click', function(e){
    e.preventDefault();
    //$(this).toggleClass('croix');
    //$(this).attr("src").replace('assets/img/croix.png');
    $('.barre').css({display : 'none'});
    $('.croix').show(1);
    $('.hamburger ul').show(1);
  });

  $('.croix').on('click', function(e){
    e.preventDefault();
    //$(this).toggleClass('menu');
    //$(this).attr("src").replace('assets/img/menu.png');
    $('.barre').show(1);
    $('.croix').css({display : 'none'});
    $('.hamburger ul').css({display : 'none'});
  });

  $('.button').on('click', function(e){
    var value = $('#saut').val();
    $('#saut').val(value + "<br/>");
  });

  $('#BtnUp').on('click', function(){
    $(document).animate({scrollTop:0}, '1000');
  });

  $('#paypal').on('click',function(){
    $('#formulairePaiement').css({'display':'none'});
    $('.boutonPaiement').css({'display':'none'});
    $('#paypalform').css({'display':'block'});
  });

  $('#formulaireCB input:eq(0), input:eq(1), input:eq(2), input:eq(3)').on('click', function(){
    $('#formulairePaiement').css({'display':'block'});
    $('.boutonPaiement').css({'display':'block'});
    $('#paypalform').css({'display':'none'});
  });


  $('.resume').mouseover(function(){
    $(this).text().substring(0,25);
    if($(this).text().length > 30) {
      $(this).stop().animate({height:"150px"},150);
      $(this).text().substring(0,100);
    }
  });

  $(".resume").mouseout(function(){
      $(this).stop().animate({height:"15px"},150);
      $(this).text().substring(0,25);
  });
});