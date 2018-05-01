<script type="text/javascript">
// Using JQuery selectors to add onFocus and onBlur event handlers

$(document).ready( function() {

  // Add the "focus" value to class attribute 
  $('ul.radio li').focusin( function() {
    $(this).addClass('focus');
  }
  );
  // Remove the "focus" value to class attribute 
  $('ul.radio li').focusout( function() {
    $(this).removeClass('focus');
  }
  );

}
);

  </script>