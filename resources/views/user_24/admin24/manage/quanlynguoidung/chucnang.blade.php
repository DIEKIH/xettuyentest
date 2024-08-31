<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('user_24.admin24.include.header')
</head>

<body class="sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <!-- Preloader -->
        <!-- @include('user_24.admin24.include.preloader')  -->
        <!-- /.preloader -->

        <!-- Navbar -->
        @include('user_24.admin24.include.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        @include('user_24.admin24.include.sidebar')
        <!-- /.sidebar -->
        {{-- @yield('sidebar1') --}}

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1302.12px;">
            <section class="content">
                <div class="container-fluid">
                    @include('user_24.admin24.include.contentheader')
                    <div class="row">
                        <div class="col-md-12">
                            <div id="loadpage"></div>
                            <div class="modal" id="id_manhinh_tam"></div>
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="card" style="min-height:600px">
                                        <div>
                                            <div class="card-header" style="padding: 0;margin-left: 10px;font-weight: bold;">Thêm chức năng</div>
                                            <div class="card-body" style="padding-top: 3px; padding-bottom:0px">
                                                {{-- --}}
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group row" style="margin-bottom: 3px">
                                                        <label for="id_user_check" class="col-sm-4 col-form-label" style="padding-bottom: 0px">Tên chức năng:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id='settings_name' style="height:28px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 validate_add_role" id="error_settings_name" style="font-size: 13px; color : red;text-align: right;"></div>
                                                {{-- --}}
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group row" style="margin-bottom: 3px">
                                                        <label for="id_user_check" class="col-sm-4 col-form-label" style="padding-bottom: 0px">Link:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id='settings_link' style="height:28px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 validate_add_role" id="error_settings_link" style="font-size: 13px; color : red;text-align: right;"></div>
                                                {{-- --}}
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group row" style="margin-bottom: 3px">
                                                        <label for="id_user_check" class="col-sm-4 col-form-label" style="padding-bottom: 0px">Ghi chú:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id='settings_note' style="height:28px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 validate_add_role" id="error_settings_note" style="font-size: 13px; color : red;text-align: right;"></div>
                                                {{-- --}}
                                                {{-- --}}
                                            </div>
                                        </div>
                                        <div class="card-header" style="padding: 0;margin-left: 10px;font-weight: bold;"></div>
                                        <div class="card-body" style="padding-top: 3px; padding-bottom:0px">
                                            <div class="row">
                                                <div class="col-md-6 col-6">
                                                    <button style="background-color: #fff; color: #007bff" type="button" id="" onclick="Clear_settings()" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-rotate"></i>&nbsp;&nbsp;&nbsp;Làm mới</button>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <button type="button" id="btt_submit_menu" btt_id_add="3" data-id="" onclick="Add_new_settings()" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp;&nbsp;Thêm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8 col-lg-8">
                                    <div class="card" style="min-height:600px">
                                        <div>
                                            <div class="card-header" style="padding: 0;margin-left: 10px;margin-top: 3px;font-weight: bold;">Danh sách chức năng</div>
                                            <div class="card-body" style="padding-bottom: 0px;padding-top: 3px" id="ds_chucnangtmp">
                                            <table class="table table-bordered table-hover table-striped dataTable no-footer dtr-inline" id="ds_chucnang"></table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('user_24.admin24.include.footer')
    </div>
    {{-- cập nhật chức năng --}}
    <div class="modal" id="modal_setting">
        <div style="vertical-align:middle;background-color: rgba(0,0,0,0.5);height: 100%;">
            <div class="row">
                <div class="col-md-2 col-12">
                </div>
                <div class="col-md-8 col-12">
                <div class="card card-navy card-outline" style="width:70%; height:auto; padding: 2px; background-color:#fff; margin-top: 20%;margin-left: 20%;">
                        <div class="card-header" style="padding: 0;margin-left: 10px;margin-top: 3px;font-weight: bold;">
                            <div class="row">
                                <div class="col-md-11 col-lg-11 col-11">
                                    <span class="">Cập nhật chức năng</span>
                                </div>
                                <div class="col-md-1 col-lg-1 col-1">
                                    <span class="float-right" style="margin-right: 10px"><i onclick="modal_cancel_setting()" id='modal_number_go_wish_start_end_close' class="fas fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="padding-bottom: 0px;padding-top: 3px">
                            <form id="editnsx">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group row" style="margin-bottom: 3px">
                                            <label for="name" class="col-sm-3 col-form-label" style="padding-bottom: 0px">Tên chức năng:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="update_tenchucnang" id='update_tenchucnang' value="" class="validate form-control" style="height:28px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12 validate_update_role" id ="error_update_tenchucnang" style="font-size: 13px; color : red;text-align: right;"></div>
                                    {{--  --}}
                                    <div class="col-md-12 col-12">
                                        <div class="form-group row" style="margin-bottom: 3px">
                                            <label for="link" class="col-sm-3 col-form-label" style="padding-bottom: 0px">Link:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="update_chucnang_link" id='update_chucnang_link' value="" class="form-control validate" style="height:28px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12 validate_update_role" id ="error_update_chucnang_link" style="font-size: 13px; color : red;text-align: right;"></div>

                                    {{--  --}}

                                    <div class="col-md-12 col-12">
                                        <div class="form-group row" style="margin-bottom: 3px">
                                            <label for="link" class="col-sm-3 col-form-label" style="padding-bottom: 0px">Ghi chú:</label>
                                            <div class="col-sm-9">
                                                <input type="text" style="height:28px" min="0" name="update_ghichu" id='update_ghichu' value="" class="form-control validate" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12 validate_update_role" id ="error_update_ghichu" style="font-size: 13px; color : red;text-align: right;"></div>
                                    {{-- <div class="col-md-12 col-12"> --}}
                                        <div class="card-header" style="padding: 0;margin-left: 10px;font-weight: bold;"></div>
                                        <div class="card-body" style="padding-top: 3px; padding-bottom:0px">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                </div>
                                                <div class="col-md-2 col-6">
                                                    <button type="button" onclick="update_chucnang()" id="btt_update_chucnang" data-id="" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp;&nbsp;Cập nhật</button>
                                                </div>
                                                <div class="col-md-2 col-6">
                                                    <button type="button" onclick="modal_refresh_setting()" id='Refresh_update_button' data-id="" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-rotate"></i>&nbsp;&nbsp;&nbsp;Làm mới</button>
                                                </div>
                                                <div class="col-md-2 col-6">
                                                    <button type="button" id='destroyEditMenu' onclick="modal_cancel_setting()" class="btn btn-block btn-primary btn-xs"><i class="fa-regular fa-circle-xmark"></i>&nbsp;&nbsp;&nbsp;Hủy</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-12">
                </div>
            </div>
        </div>
    </div>

</body>
<script src="/admin/admin24/js/quanlynguoidung/chucnang.js"></script>

</html>
