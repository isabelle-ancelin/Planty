<!-- start Simple Custom CSS and JS -->
<script>
 
jQuery(document).ready(function($) {
  $('.quantity input[type="number"]').each(function() {
    var input = $(this);
    var quantityNav = $('<div class="quantity-nav"></div>');
    var quantityButtonUp = $('<div class="quantity-button quantity-up">+</div>');
    var quantityButtonDown = $('<div class="quantity-button quantity-down">-</div>');

    quantityNav.append(quantityButtonUp);
    quantityNav.append(quantityButtonDown);
    input.after(quantityNav);

    quantityButtonUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (isNaN(oldValue)) {
        oldValue = 0;
      }
      var newValue = oldValue + 1;
      input.val(newValue);
    });

    quantityButtonDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (isNaN(oldValue)) {
        oldValue = 0;
      } else if (oldValue <= 0) {
        return;
      }
      var newValue = oldValue - 1;
      input.val(newValue);
    });
  });
});



</script>
<!-- end Simple Custom CSS and JS -->
