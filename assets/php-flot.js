$( ".line-php-flot" ).each(function( index ) {
      console.log( index );
      console.log( index + ": " + $( this ).text() );
      console.log($( this ).attr('data_color'));   
      console.log($( this ).context.id);   
});