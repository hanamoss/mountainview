
    $(document).ready(function () {
        //input in invest popup
        $('.btn-number').click(function(e){
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type      = $(this).attr('data-type');
            var input = $("input[name='"+fieldName+"']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if(type == 'minus') {
                    if(currentVal>1){
                        input.val(currentVal - 1).change();
                    }
                } else if(type == 'plus') {
                    input.val(currentVal + 1).change();
                }
            } else {
                input.val(1);
            }
        });

        $('.input-number').change(function() {
            var valueCurrent = parseInt($(this).val());
            var pricePerShare = $("#price-per-share").val();
            $("#amount-of-share-label").html(valueCurrent);
            $("#total-investment").html('$'+valueCurrent*pricePerShare);
        });

    })
 