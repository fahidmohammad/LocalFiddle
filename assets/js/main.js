(function($) {
  function resizeInterface ( ) {
    var headerHeight = $('header').outerHeight();
    var viewPortSize =  { 
      "height" : $(window).height(),
      "width": $(window).width() 
    };    
    $('#editpanel').height(viewPortSize.height - headerHeight - 2);
    $('#editpanel textarea').height((viewPortSize.height - headerHeight - 170) / 3);
    
    $('#editpanel').width(Math.floor(viewPortSize.width * 0.4));
    
    $('#resultpanel, #resultpanel iframe')
    .width(viewPortSize.width - $('#editpanel').outerWidth())
    .height(viewPortSize.height - headerHeight - 2);
  }
  
  
  $(document).ready(function() {    
    resizeInterface();
    $(window).resize(resizeInterface);    
    
    $('#editpanel textarea').tabby();
    $('.controls #clear').click(function() {
      if(confirm('Are you sure you want to clear ALL of the input fields?')) {
        $('textarea').val('');
      }       
    });
  });  
})(jQuery);