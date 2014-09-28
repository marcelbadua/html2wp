// Attach a submit handler to the form
$( "#createForm" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form = $( this ),
    code = $form.find( "textarea[name='inputCode']" ).val(),
    session = $form.find( "input[name='inputSession']" ).val(),
    url = $form.attr( "action" );
  
  // Send the data using post
  var posting = $.post( url, { code: code, session: session } );
 
  // Put the results in a div
  posting.done(function( data ) {
    //var content = $( data ).find( "#content" );
    $( "#submit-button").attr('disabled', true);

    $( "#result" ).empty().append( data );
  });
});