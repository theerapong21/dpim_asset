function save_info() {
    if (validateFillInput() == false) {
        $("#alert_error_text").text('กรุณากรอกข้อมูลให้ครบถ้วน');
        $("#alert_error").removeClass('display-hide');
        $("#alert_error").addClass('display-show');
    }else {
        var obj_send = {};
        var csrf = $('meta[name="csrf-param"]').attr('content');
        $("input[type='text'][id*='__'],input[type='hidden'][id*='__'],textarea[id*='__']").each(function() {
            obj_send[$(this).prop("id").toString().replace(/__/g, "")] = $.trim($(this).val());
        });
        $.ajax({
            url: "/screen",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': csrf,
            },
            data: obj_send,
            beforeSend: function() {
                $("#ajax_loader").modal({
                    backdrop: "static"
                });
            },
            success: function(data) {
                $("input[type='text'][id*='__'],input[type='hidden'][id*='__'],textarea[id*='__']").each(function() {
                    $(this).val('');
                });
                $(".form-group").removeClass('has-success');
                $(".form-group").removeClass('has-error');
                $("#alert_error").removeClass('display-show');
                $("#alert_error").addClass('display-hide');
                $("#alert_success").removeClass('display-show');
                $("#alert_success").addClass('display-hide');
                bootbox.alert(data.status_text);
            },
            errors: function(xhr, status, error) {
                alert(xhr);
                alert(status);
            },
            complete: function(data) {
                $("#ajax_loader").modal("hide");
            }
        });
    }
}
