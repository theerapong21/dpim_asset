 <!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">จัดการหน้าจอ</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>เพิ่มหน้าจอ</span>
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
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-television font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">เพิ่มหน้าจอ</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <div action="#" id="form_sample_1" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <div class="alert alert-danger display-hide" id="alert_error">
                                <button class="close" data-close="alert"></button><samp id="alert_error_text"></samp>
                            </div>
                            <div class="alert alert-success display-hide" id="alert_success">
                                <button class="close" data-close="alert"></button><samp id="alert_success_text"></samp>
                            </div>
                            <div class="form-group" id="screen_code_group">
                                <label class="control-label col-md-3">รหัสหน้าจอ
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                <input type="text" name="__screen_code" id="__screen_code" data-required="1" class="form-control" required />
                                </div>
                            </div>

                            <div class="form-group" id="screen_name_th_group">
                                <label class="control-label col-md-3">ชื่อหน้าจอ (ไทย)
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="__screen_name_th" id="__screen_name_th" data-required="1" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">ชื่อหน้าจอ (Eng)
                                    <span class="required">  </span>
                                </label>
                                <div class="col-md-4" id="screen_name_en_group">
                                    <input type="text" name="__screen_name_en" id="__screen_name_en"  class="form-control" /> </div>
                            </div>
                            <div class="form-group" id="screen_path_group">
                                <label class="control-label col-md-3">screen path
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="__screen_path" id="__screen_path"  class="form-control" required/> </div>
                            </div>

                            <div class="form-group" id="screen_remark_group">
                                <label class="control-label col-md-3">หมายเหตุ
                                    <span class="required">  </span>
                                </label>
                                <div class="col-md-4">
                                    <textarea name="__screen_remark" id="__screen_remark"  class="form-control" ></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="button" class="btn green" id="save_info" onclick="save_info()" >บันทึก</button>
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
<script src="https://cdn.jsdelivr.net/bootbox/4.4.0/bootbox.min.js"></script>
<script src="{{ url('/assets/apps/js/m_screen.js') }}"></script>
<script src="{{ url('/assets/apps/js/formValidation.js') }}"></script>
