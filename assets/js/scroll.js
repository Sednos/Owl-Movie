$(document).ready(function(){

  $btnup = $('#BtnUp');

  $btnup.on('click', function(){

    var body = $("html, body");
    body.animate({scrollTop:0}, '1000', 'swing');

  });

});
