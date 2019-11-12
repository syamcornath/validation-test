<form id="transport-form">
  <input type="text" name="qty[]" id="qty1">
  <input type="text" name="qty[]" id="qty2" >
  <input type="text" name="qty[]" id="qty3">
  <input type="text" name="qty[]" id="qty4">
  <input type="submit" value="submit">
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="jquery.validate.min.js"></script>
<script>
jQuery("#transport-form").validate({
        rules: {
            'qty[]': {
                required: true
            }
        },
    });
</script>