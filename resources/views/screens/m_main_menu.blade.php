
<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />

 <!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">จัดการเมนู</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>เพิ่มเมนูหลัก</span>
        </li>
    </ul>


</div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">  <small></small>
    </h3>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-television font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">เพิ่มเมนูหลัก</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <div id="form_sample_1" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <div class="alert alert-danger display-hide" id="alert_error">
                                <button class="close" data-close="alert"></button><samp id="alert_error_text"></samp>
                            </div>
                            <div class="alert alert-success display-hide" id="alert_success">
                                <button class="close" data-close="alert"></button><samp id="alert_success_text"></samp>
                            </div>

                            <div class="form-group" id="screen_id_group">
                                <label>เลือกหน้าจอ<span class="required"> * </span></label>
                                <div class="input-group ">
                                    <input type="text" name="__screen_name" id="__screen_name" class="form-control " readonly />
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" onclick="ScreenList()">
                                            <i class="fa fa-desktop"></i>
                                        </button>
                                    </span>
                                    <input type="hidden" name="__screen_id" id="__screen_id" class="form-control" required/>
                                </div>
                                <!-- /input-group -->
                            </div>


                            <div class="form-group" id="main_menu_code_group">
                                <label>รหัสเมนู
                                    <span class="required"> * </span>
                                </label>

                                <input type="text" name="__main_menu_code" id="__main_menu_code"  class="form-control " aria-describedby="sizing-addon1" required />

                            </div>


                            <div class="form-group" id="main_menu_tooltip_text_group">
                                <label>Tooltip text

                                </label>

                                <input type="text" name="__main_menu_tooltip_text" id="__main_menu_tooltip_text"  class="form-control" aria-describedby="sizing-addon1"  />


                            </div>

                            <div class="form-group" id="main_menu_order_group">
                                <label>ลำดับ</label>

                                <input type="number" name="__main_menu_order" id="__main_menu_order"  class="form-control" aria-describedby="sizing-addon1"  min="0"  />


                            </div>
                            <div class="form-group" id="main_menu_order_group">
                                <label>Menu icon</label>

                                <input type="text" name="__main_menu_icon" id="__main_menu_icon"  class="form-control" aria-describedby="sizing-addon1"    />


                            </div>
                            <div class="form-group" id="main_menu_remark_group">
                                <label>Remark</label>

                                <input type="text" name="__main_menu_remark" id="__main_menu_remark"  class="form-control" aria-describedby="sizing-addon1"    />


                            </div>
                        </div>
                        <div class="form-actions right">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn green" id="save_info" onclick="" >บันทึก</button>
                                    <button type="button" class="btn grey-salsa btn-outline">ยกเลิก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->

        </div>
</div>

<!-- /.modal -->
<div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Responsive & Scrollable</h4>
            </div>
            <div class="modal-body">
                <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Extn.</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        </tr>
                                </thead>
       
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                <button type="button" class="btn green">Save changes</button>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/bootbox/4.4.0/bootbox.min.js"></script>

<script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

<script >
    function ScreenList(){
        $('#example').DataTable({
            "processing": true,
            "serverSide": true,

            "ajax": "{{ url('/screen_list') }}",
            "columns": [
                { "data": "id" },
                { "data": "screen_code" },
                { "data": "screen_name_th" },
                { "data": "screen_name_en" },
                { "data": "screen_path" },
                { "data": "create_by" }
            ]
        });


        $("#responsive").modal({backdrop: "static"});
    }

</script>

<script src="{{ asset('/assets/apps/js/formValidation.js') }}"></script>
