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

  $(document).ready(function() {

    $('#cards').hScroll(100);

    // $(".card").draggable();

    $('#element').mousedown(function(event) {
        switch (event.which) {
            case 1:
                alert('Left Mouse button pressed.');
                break;
            case 2:
                alert('Middle Mouse button pressed.');
                break;
            case 3:
                alert('Right Mouse button pressed.');
                break;
            default:
                alert('You have a strange Mouse!');
        }
    });

    $('body').on('mouseenter', '.cards .card', function(e) {
        var dragable = $(this).clone();
        var top = $(this).offset().top;
        var left = $(this).position().left;
        dragable.addClass('card--drag');
        dragable.css("top", parseInt(top)+"px");
        dragable.css("left", parseInt(left)+"px");
        dragable.appendTo( ".content" );
        dragable.draggable();
    })

    $('body').on('mouseleave', '.card--drag', function(e) {
      $(this).remove();
    });

    $('body').on('mouseup', '.card--drag', function(e) {
      var tableCard = $(this).clone();
      tableCard.removeClass('card--drag');
      tableCard.addClass('card--table');
      var top = $(this).offset().top;
      var left = $(this).position().left;
      tableCard.css("top", parseInt(top)+"px");
      tableCard.css("left", parseInt(left)+"px");
      tableCard.appendTo( ".table" );
      tableCard.resizable({ containment: ".table", aspectRatio: true });
      tableCard.draggable({ containment: ".table", scroll: false });
    });

    $('body').on('dblclick', '.card--table', function(e) {
      console.log('dblclick');
      $(this).toggleClass('card--back');
    });

    // $('body').on('mousedown', '.cards .card', function(e) {
    //   if ( event.which == 1 ) {
    //     var dragable = $(this).clone();
    //     var top = $(this).offset().top;
    //     var left = $(this).position().left;
    //     dragable.css("position", "absolute");
    //     dragable.css("z-index", 1);
    //     dragable.css("top", parseInt(top)+"px");
    //     dragable.css("left", parseInt(left)+"px");
    //     dragable.appendTo( ".content" );
    //     dragable.draggable();
    //   }
    // });

  });
});
