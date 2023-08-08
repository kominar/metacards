jQuery(function($){

  $.fn.hScroll = function (amount) {
      amount = amount || 120;
      $(this).bind("DOMMouseScroll mousewheel", function (event) {
          var oEvent = event.originalEvent,
              direction = oEvent.detail ? oEvent.detail * -amount : oEvent.wheelDelta,
              position = $(this).scrollLeft();
          position += direction > 0 ? -amount : amount;
          $(this).scrollLeft(position);
          event.preventDefault();
      })
  };

  function playAudio(url){
    var myAudio = new Audio;
    myAudio.src = url;
    myAudio.play();
  }

  ZINDEX_COUNTER = 0; 

  $(document).ready(function() {

    $('#cards').hScroll(100);

    $('body').on('click', '.cards .card', function(e) {
        var card = $(this).clone();
        ZINDEX_COUNTER = ZINDEX_COUNTER + 1;
        var height_table = $('.table').height();
        var height_cards = $('.cards').height();
        var height_card = $(this).height();
        var height = parseInt(height_table) - parseInt(height_card) - parseInt(height_cards) - 10;
        var left = $(this).position().left;
        card.css('z-index', ZINDEX_COUNTER);
        card.css('position', 'absolute');
        card.appendTo( ".table" );
        card.css("top", height + "px");
        card.css("left", parseInt(left)+"px");
        card.draggable({ containment: ".table", scroll: false });
        card.find('.card__body').resizable({ containment: ".table", aspectRatio: true });
        card.find('.card__body').rotatable({ degress: 45 });
        playAudio("/uploads/audio/take_card.mp3");
        $(this).addClass('invis');
    })

    $('body').on('click', '.js-bg-toggle', function(e) {
      $('.bgPanel').toggleClass('open');
    });

    $('body').on('click', '.js-sets-toggle', function(e) {
      $(this).parents('.content__sidebar').toggleClass('open');
    });

    $('body').on('click', '.js-cards-toggle', function(e) {
      $(this).parents('.cards').toggleClass('open');
    });

    $('body').on('click', '.js-cards-turnover', function(e) {
      $('.cards .card').toggleClass('card--back');
    });

    $('body').on('click', '.js-cards-random', function(e) {
      $('.cards').addClass('mix');
      playAudio("/uploads/audio/mix_cards.mp3")

      setTimeout(function(){
        $('.cards').removeClass('mix');
      }, 1000);    
    });

    $('body').on('click', '.js-cards-clean', function(e) {
      $('.table .card').remove();
      $('.cards .card').removeClass('invis');
      playAudio("/uploads/audio/clear_cards.mp3")
    });
    
    $('body').on('dblclick', '.table .card', function(e) {
      $(this).toggleClass('card--back');
    });

    $('body').on('click', '.set:not(.active)', function(e) {
      var set = $(this).attr('data-id');
      $('.set').removeClass('active');
      $(this).addClass('active');
      $('.cards .card').addClass('card--back');
      $('.cards .card').hide();
      $('.cards .card[data-set='+set+']').show();
      $('.cards').addClass('open');
    });

    $('body').on('click', '.table .card', function(e) {
      ZINDEX_COUNTER = ZINDEX_COUNTER + 1;
      $(this).css('z-index', ZINDEX_COUNTER);
    });

    $('body').on('click', '.card__remove', function(e) {
      $(this).parents('.card').remove();
    });
    $('body').on('click', '.bgItem:not(.active)', function(e) {
      var bg = $(this).attr('data-bg');
      // console.log()
      $('.table').css('background-image', 'url('+bg+')');
      $('.bgItem').removeClass('active');
      $(this).addClass('active');
    });

    $('[name=bgcolor]').on('change',function(){    
      $('.table').css('background-color', $(this).val());
      $('.table').css('background-image', 'none');
    });

  });
});