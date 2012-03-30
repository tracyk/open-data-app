
var $$ = $.fn;

$$.extend({
  SplitID : function()
  {
    return this.attr('id').split('-').pop();
  },

  slideshow : {
    Ready : function()
    {
      $('div.slideshowControl')
        .hover(
          function() {
            $(this).addClass('slideshowControlOn');
          },
          function() {
            $(this).removeClass('slideshowControlOn');
          }
        )
        .click(
          function() {
            $$.slideshow.Interrupted = true;

            $('div.slide').hide();
            $('div.slideshowControl').removeClass('slideshowActive');

            $('div#slide-' + $(this).SplitID()).show()
            $(this).addClass('slideshowActive');
          }
        );

      this.counter = 1;
      this.Interrupted = false;

      this.Transition();
    },

    Transition : function()
    {
      if (this.Interrupted) {
        return;
      }

      this.last = this.counter - 1;

      if (this.last < 1) {
        this.last = 5;
      }

      $('div#slide-' + this.last).fadeOut(
        'slow',
        function() {
          $('div#slideshowControl-' + $$.slideshow.last).removeClass('slideshowActive');
          $('div#slideshowControl-' + $$.slideshow.counter).addClass('slideshowActive');
          $('div#slide-' + $$.slideshow.counter).fadeIn('slow');

          $$.slideshow.counter++;

          if ($$.slideshow.counter > 5) {
            $$.slideshow.counter = 1;
          }

          setTimeout('$$.slideshow.Transition();', 3500);
        }
      );
    }
  }
});

$(document).ready(
  function() {
    $$.slideshow.Ready();
  }
);
