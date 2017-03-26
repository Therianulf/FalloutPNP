/**
 * Created by therian on 3/26/2017.
 */

$( document ).ready(
    function() {
        $(":input[type='number']").bind('keyup mouseup', function () {
            $(":input[type='number']").each(
                function(i){
                    alert(this.val());
                }
            )
        });
});






function check_attribute() {

}

function attribute_less_total() {
    
}