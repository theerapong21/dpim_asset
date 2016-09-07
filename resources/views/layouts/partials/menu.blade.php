<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse" id='userMenuArea'>
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->

        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->

@section('menujs')

<script type="text/javascript">
    $(function () {
       
        $.ajax({
            url: 'usermenu',
            method: 'GET',
            success: function (data) {

                $('#userMenuArea').html(gernareteMenu.getHtml(data.menu_bar));
                //alert(data.menu_bar[0].menu_start_at);

            },
            complete: function () {

                $('#menulayout1').attr("src", "../assets/layouts/layout/scripts/layout.js")
                $('#menulayout2').attr("src", "../assets/layouts/layout/scripts/demo.js")
                $(".a_link").click(function () {
                    var gotopage=$(this).attr("id");
                    $.ajax({
                        url:gotopage,
                        method:'GET',
                        type:'html',
                        beforeSend: function(){

                            $("#ajax_loader").modal({backdrop: false});
                            $(".nav-item").removeClass('active');
                            $(".arrow").removeClass('open');
                        },success: function(data){
                            $("#page_content").html(data);
                        },error: function(error){
                            //alert(error.responseText);
                            $("#page_content").html(error.responseText);
                        },
                        complete:function(){
                            $("#ajax_loader").modal('hide');
                            $("#m_li_"+gotopage).addClass('active');
                        }
                    });
                });

            }

        });

        var gernareteMenu = {
            getHtml: function (obj) {
                var stringConcat = '<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="100" style="padding-top: 23px">';

                for (var i in obj) {

                    stringConcat = stringConcat.concat(
                            '' + obj[i].menu_start_at === 'T' ? '<li class="nav-item active " id="m_li_'+obj[i].menu_screen_code+'" >' : '<li class="nav-item" id="m_li_'+obj[i].menu_screen_code+'" >' + '',
                            '<a href="#" class="nav-link nav-toggle a_link" id="'+obj[i].menu_screen_code + '">',
                            '<i class="icon-home"></i>',
                            '<span class="title">' + obj[i].menu_screen_name_th + '</span>',
                            '<span class="to_select selected" ></span>',
                            '' + obj[i].menu_submenu_1.length > 0 && obj[i].menu_start_at === 'T'? '<span class="arrow open" id="m_a'+obj[i].menu_screen_code +'"></span>' : + obj[i].menu_submenu_1.length > 0 ? '<span class="arrow" id="m_a'+obj[i].menu_screen_code +'"></span>' :'' + '',
                            '</a>'
                            );

                    if (obj[i].menu_submenu_1.length > 0) {
                        stringConcat = stringConcat.concat('<ul class="sub-menu" >');

                        for (var j in obj[i].menu_submenu_1) {
                            stringConcat = stringConcat.concat(
                                '<li class="nav-item">',
                                '<a href="#" class="nav-link a_link" id="'+obj[i].menu_submenu_1[j].menu_s_screen_code +'">',
                                ' <i class="icon-bar-chart"></i>',
                                '<span class="title"> ' + obj[i].menu_submenu_1[j].menu_s_screen_name_th + '</span>',
                                '' + obj[i].menu_submenu_1[j].menu_s_submenu_2.length > 0 ? '<span class="arrow"></span>' : '' + '',
                                '</a>');


                                    if(obj[i].menu_submenu_1[j].menu_s_submenu_2.length > 0){
                                        stringConcat = stringConcat.concat('<ul class="sub-menu" >');

                                        for (var k in obj[i].menu_submenu_1[j].menu_s_submenu_2) {
                                            stringConcat = stringConcat.concat(
                                                '<li class="nav-item ">',
                                                '<a href="' + obj[i].menu_submenu_1[j].menu_s_submenu_2[k].menu_s_s_screen_code + '" class="nav-link a_link">',
                                                ' <i class="icon-bar-chart"></i>',
                                                '<span class="title"> ' + obj[i].menu_submenu_1[j].menu_s_submenu_2[k].menu_s_s_screen_name_th + '</span>',                                                
                                                '</a></li>'
                                                );


                                        }
                                        stringConcat = stringConcat.concat('</ul>');
                                    }


                            stringConcat = stringConcat.concat('</li>');
                        }
                        stringConcat = stringConcat.concat('</ul>');
                    }




                    stringConcat = stringConcat.concat('</li>');
                }

                stringConcat = stringConcat.concat('</ul>');

                return stringConcat;



            }
        };



    });

</script>
<!-- BEGIN CORE PLUGINS -->

<!-- END CORE PLUGINS -->

@endsection
