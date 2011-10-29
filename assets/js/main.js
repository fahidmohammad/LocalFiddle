MJF = {
  'clearAll': function() {
    if(confirm('Are you sure you want to clear ALL of the input fields?')) {
      var all_fields = document.getElementsByTagName('textarea');
      for(var a = 0; a < all_fields.length; a += 1) {
        all_fields[a].value = '';
      }
    }
  }
}