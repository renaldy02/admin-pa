@extends('index')
@section('data-user')
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
                <h3 class="m-subheader__title m-subheader__title--separator">Data karyawan</h3>
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
                            karyawan
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                        <a href="{{url("tambah-karyawan")}}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                                <span>
                                    <i class="la la-cart-plus"></i>
                                    <span>Tambah karyawan</span>
                                </span>
                            </a>
                        </li>
                        <li class="m-portlet__nav-item"></li>

                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal_bergabung</th>
                            <th>Status_karyawan</th>
                            <th>Gambar</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Ktp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <th>{{1}}</th>
                            <th>{{$item->nama}}</th>
                            <th>{{$item->alamat}}</th>
                            <th>{{$item->tanggal_bergabung}}</th>
                            <th>{{$item->status_karyawan}}</th>
                            <th><img style="width: 55px;" src="{{$item->gambar}}"></th>
                            <th>{{$item->created_at}}</th>
                            <th>{{$item->updated_at}}</th>
                            <th>{{$item->ktp}}</th>
                            <th><a href="{{url('karyawan/hapus/'.$item->id)}}"><button class="btn btn-danger btn-xs">Hapus</button></a></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!--begin::Modal-->
        <div class="modal fade" id="m_role" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form id="f_roles">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Role Name:</label>
                                <input type="text" name="name" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Diplay Name:</label>
                                <input type="text" class="form-control" name="display_name" />
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Description:</label>
                                <input type="text" class="form-control" name="description" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">* Permissions:</label>
                                <div class="m-checkbox-inline">
                                    @foreach(\App\Permission::all() as $item)
                                    <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" name="permission[]" value="{{$item->id}}">
                                        {{$item->name}}
                                        <span></span>
                                    </label>
                                    @endforeach
                                </div>
                                <span class="m-form__help">Please select user Permission options</span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Modal-->

        <!--begin::Modal-->
        <div class="modal fade" id="m_permission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Permission</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="f_permission">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Permission Name:</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Diplay Name:</label>
                                <input type="text" class="form-control" name="display_name" />
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Description:</label>
                                <input type="text" class="form-control" name="description" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Permission</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Modal-->

        <!-- END EXAMPLE TABLE PORTLET-->
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
            language: {
                "zeroRecords": "Data Tidak di Temukan",
                "processing": "Sedang Memuat Data"
            },
            ajax: "{{url('manajemen-user/getuser')}}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role_name',
                    name: 'role_name'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'updated_at',
                    name: 'updated_at'
                }
            ],
            initComplete: function () {
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
