$( "form" ).submit(function( event ) {
    var b = Number($( "input:first" ).val());
    if ( b < 3 || b%2 != 0 || !Number.isInteger(b)) {
      $( ".error" ).text("Дані введено невірно").show().fadeOut( 2000 );
      event.preventDefault();
    }
    return;
});