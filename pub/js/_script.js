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

  function playAudio(){
    var myAudio = new Audio;
    myAudio.src = "/uploads/audio/take_card.mp3";
    myAudio.play();
  }

  ZINDEX_COUNTER = 0; 

  $(document).ready(function() {

    $('#cards').hScroll(100);

    $('body').on('click', '.cards .card', function(e) {
        var card = $(this).clone();
        ZINDEX_COUNTER = ZINDEX_COUNTER + 1;
        var height_table = $('.table').height();
        var height_card = $(this).height();
        var height = parseInt(height_table) - parseInt(height_card) - 20;
        var left = $(this).position().left;
        card.css('z-index', ZINDEX_COUNTER);
        card.css('position', 'absolute');
        card.appendTo( ".table" );
        card.css("top", height + "px");
        card.css("left", parseInt(left)+"px");
        card.draggable({ containment: ".table", scroll: false });
        card.find('.card__body').resizable({ containment: ".table", aspectRatio: true });
        card.find('.card__body').rotatable({ degress: 45 });
        playAudio();
    })

    $('body').on('dblclick', '.table .card', function(e) {
      $(this).toggleClass('card--back');
    });

    $('body').on('click', '.set:not(.active)', function(e) {
      var set = $(this).attr('data-id');
      $('.set').removeClass('active');
      $(this).addClass('active');
      $('.cards .card').hide();
      $('.cards .card[data-set='+set+']').show();
    });

    $('body').on('click', '.table .card', function(e) {
      ZINDEX_COUNTER = ZINDEX_COUNTER + 1;
      $(this).css('z-index', ZINDEX_COUNTER);
    });

    $('body').on('click', '.card__remove', function(e) {
      $(this).parents('.card').remove();
    });

  });
});