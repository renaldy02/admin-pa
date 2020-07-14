@extends('index')
@section('tambah hotel')
    m-menu__item--active
@endsection
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">tambah tiket wisata</h3>
                </div>
                <div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#"
                                       class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
                </div>
            </div>
        </div>
        <div class="m-content">
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile"
                         id="main_portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-progress">

                                <!-- here can place a progress bar-->
                            </div>
                            <div class="m-portlet__head-wrapper">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            tambah tiket wisata
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <a href="{{url('manajemen-user/user')}}"
                                       class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
													<span>
														<i class="la la-arrow-left"></i>
														<span>Back</span>
													</span>
                                    </a>
                                    <div class="btn-group">
                                        <button type="button" id="submit"
                                                class="btn btn-accent  m-btn m-btn--icon m-btn--wide m-btn--md">
														<span>
															<i class="la la-check"></i>
															<span>Save</span>
														</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <form class="m-form m-form--label-align-left- m-form--state-" id="f_users" enctype="multipart/form-data">

                                <!--begin: Form Body -->
                                <div class="m-portlet__body">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="m-form__section m-form__section--first">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title">tiket wisata Details</h3>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-control-label">* nama tiket wisata:</label>
                                                        <input type="teks" name="nama_tiket"
                                                               class="form-control m-input" placeholder="">
                                                        <span class="m-form__help">Please enter your Name to your dashboard</span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <div class="col-lg-6 m-form__group-sub">
                                                        <label class="form-control-label">* harga:</label>
                                                        <input type="teks" name="harga"
                                                               class="form-control m-input" placeholder="" required>
                                                        <span class="m-form__help">Your Email to login to your dashboard</span>
                                                    </div>
                                                    <div class="col-lg-6 m-form__group-sub">
                                                        <label class="form-control-label">* gambar:</label>
                                                        <input type="file" name="gambar"
                                                               class="form-control m-input" placeholder="">
                                                        <span class="m-form__help">Please use letters and at least one number and symbol</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--end::Portlet-->
                </div>
            </div>
        </div>
    </div>
@endsection
@section("foother")
    <script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

    <!--end::Base Scripts -->

    <!--begin::Page Vendors Scripts -->
    <script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"
            type="text/javascript"></script>

    <!--end::Page Vendors Scripts -->

    <!--begin::Page Snippets -->
    <script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#submit").on("click", function (event) {
                event.preventDefault();
                var data = new FormData();

                //Form data
                var form_data = $('#f_users').serializeArray();
                $.each(form_data, function (key, input) {
                    data.append(input.name, input.value);
                });

                //File data
                var file_data =  $('input[type=file]')[0].files[0];
                data.append("gambar", file_data);
            
                $.ajax({
                    url: "{{url('simpan_tiket')}}",
                    type: "post",
                    processData: false,
                    contentType: false,
                    data: data,
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
        });
    </script>
@endsection