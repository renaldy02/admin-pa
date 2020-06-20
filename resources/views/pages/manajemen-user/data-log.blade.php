@extends('index')
@section('data-log')
    m-menu__item--active
@endsection
@section('header')
    @include('assets.datatables.header')
@endsection
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">Manajemen Users</h3>
                    {{--<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">--}}
                    {{--<li class="m-nav__item m-nav__item--home">--}}
                    {{--<a href="#" class="m-nav__link m-nav__link--icon">--}}
                    {{--<i class="m-nav__link-icon la la-home"></i>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="m-nav__separator">-</li>--}}
                    {{--<li class="m-nav__item">--}}
                    {{--<a href="" class="m-nav__link">--}}
                    {{--<span class="m-nav__link-text">DataTables</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="m-nav__separator">-</li>--}}
                    {{--<li class="m-nav__item">--}}
                    {{--<a href="" class="m-nav__link">--}}
                    {{--<span class="m-nav__link-text">Extensions</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="m-nav__separator">-</li>--}}
                    {{--<li class="m-nav__item">--}}
                    {{--<a href="" class="m-nav__link">--}}
                    {{--<span class="m-nav__link-text">Buttons</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                </div>
                <div>
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                         m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#"
                           class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__section m-nav__section--first m--hide">
                                                <span class="m-nav__section-text">Quick Actions</span>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                    <span class="m-nav__link-text">Activity</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                    <span class="m-nav__link-text">Messages</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                    <span class="m-nav__link-text">FAQ</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                    <span class="m-nav__link-text">Support</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__separator m-nav__separator--fit">
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="#"
                                                   class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30"
                 role="alert">
                <div class="m-alert__icon">
                    <i class="flaticon-exclamation m--font-brand"></i>
                </div>
                <div class="m-alert__text">
                    A common UI paradigm to use with interactive tables is to present buttons that will trigger some
                    action. See official documentation
                    <a href="https://datatables.net/extensions/buttons/" target="_blank">here</a>.
                </div>
            </div>
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Data Logs
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">

                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="users">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Subject</th>
                            <th>URL</th>
                            <th>Method</th>
                            <th>IP</th>
                            <th>Agent</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foother')
    @include('assets.datatables.foother')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#users").DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
                buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                language: {"zeroRecords": "Data Tidak di Temukan", "processing": "Sedang Memuat Data"},
                ajax: "{{url('manajemen-user/getlogs')}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'subject', name: 'subject'},
                    {data: 'url', name: 'url'},
                    {data: 'method', name: 'method'},
                    {data: 'ip', name: 'ip'},
                    {data: 'agent', name: 'agent'},
                    {data: 'created_at', name: 'created_at'}
                ], initComplete: function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var input = document.createElement("input");
                        $(input).appendTo($(column.footer()).empty())
                            .on('change', function () {
                                column.search($(this).val()).draw();
                            });
                    });
                }
            })
        })

        $("#f_permission").on("submit", function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{url('manajemen-user/add-permission')}}",
                type: "post",
                data: $('#f_permission').serialize(),
                beforeSend: function () {
                    swal({
                        title: "Mohon Tunggu",
                        text: "Proses sedang berlangsung",
                        showConfirmButton: false
                    });
                },
                success: function (d) {
                    if (d.status == 200) {
                        swal("Berhasil", d.msg, "success");
                        document.location.href = d.url;
                    } else {
                        sweetAlert("Mohon Maaf...", d.msg, "error");
                    }
                },
                error: function (d) {
                    sweetAlert("Mohon Maaf...", "Terjadi kesalahan pada sistem!", "error");
                }
            });
        });

        $("#f_roles").on("submit", function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{url('manajemen-user/add-roles')}}",
                type: "post",
                data: $('#f_roles').serialize(),
                beforeSend: function () {
                    swal({
                        title: "Mohon Tunggu",
                        text: "Proses sedang berlangsung",
                        showConfirmButton: false
                    });
                },
                success: function (d) {
                    if (d.status == 200) {
                        swal("Berhasil", d.msg, "success");
                        document.location.href = d.url;
                    } else {
                        sweetAlert("Mohon Maaf...", d.msg, "error");
                    }
                },
                error: function (d) {
                    sweetAlert("Mohon Maaf...", "Terjadi kesalahan pada sistem!", "error");
                }
            });

        })
    </script>
@endsection