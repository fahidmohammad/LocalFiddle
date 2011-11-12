(function($) {
  $(document).ready(function() {
    $('.controls #clear').click(function() {
      if(confirm('Are you sure you want to clear ALL of the input fields?')) {
        $('textarea').val('');
      }       
    });
  });  
})(jQuery);