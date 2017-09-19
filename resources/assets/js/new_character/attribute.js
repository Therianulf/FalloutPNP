/**
 * Created by therian on 3/26/2017.
 */

var globalParamTotal = 0; //this has to exist outside of the function
$( document ).ready(
    function(){
        $(":input[type='number']").bind('keyup mouseup', function (event) {
            checkTotal();
            console.log(globalParamTotal);
        });
    }
);

function checkTotal(){
    var numberInputs = $(document).find(":input[type='number']"),
        localParamTotal = 0;
    $.each(numberInputs, function(index, obj){
        var currentVal = parseInt($(obj).val(),10);
        localParamTotal = localParamTotal + currentVal;
    });
    $(document).find("#character_total_points").val(localParamTotal);
    globalParamTotal = localParamTotal;
}


function check_attribute() {

}

function attribute_less_total() {
    
}