
number_of_tagged_skills = 0;


$(document).ready(function () {
    $("checkbox").change(
        tag_skill(this)
    );
    $("#reset_checkbox").on("click",untag_skills());
});



function tag_skill(checkbox){
    clicked_box = "#" + checkbox.name() + "_value";
    tagged_skill = $(clicked_box);
    current_val = tagged_skill.val();
    if(checkbox.is(":checked")) {
        tagged_skill.val(current_val - 20);
    }else{
        tagged_skill.val(current_val + 20);
    }

}

function untag_skills() {
    $("checkbox").each(function () {
        this.checked = false;
    })
}