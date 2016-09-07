var validateFillInput=function () {
    let checked = true;
    $("input[required][id*='__']").each(function() {
        if ($(this).val() === "") {
            checked = false;
            let fillName = $(this).prop("id").toString().replace(/__/g, "");
            $("#" + fillName + "_group").removeClass('has-success');
            $("#" + fillName + "_group").addClass('has-error');
        } else {
            let fillName = $(this).prop("id").toString().replace(/__/g, "");
            $("#" + fillName + "_group").removeClass('has-error');
            $("#" + fillName + "_group").addClass('has-success');
        }
    });
    return checked;
}