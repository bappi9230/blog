        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
            <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
        </a>



        <!-- Vendor js -->
        <script src="{{ asset('adminpanel/assets/js/vendor.min.js') }}"></script>

        <!--C3 Chart-->
        <script src="{{ asset('adminpanel/assets/libs/d3/d3.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/c3/c3.min.js') }}"></script>

        <script src="{{ asset('adminpanel/assets/libs/echarts/echarts.min.js') }}"></script>

        <script src="{{ asset('adminpanel/assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('adminpanel/assets/js/app.min.js') }}"></script>

        <!-- select -->
        <script src="{{ asset('adminpanel/assets/libs/select2/select2.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>

        <!-- Sweetalert--->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{ asset('adminpanel/assets/js/sweet_alert.js') }}"></script>
        <!-- End Sweetalert--->



        <!-- Toaster Message -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;

                    case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;

                    case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;

                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break;
                }
            @endif
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#show_hide_password a").on('click', function(event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass("fa-eye-slash");
                        $('#show_hide_password i').removeClass("fa-eye");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass("fa-eye-slash");
                        $('#show_hide_password i').addClass("fa-eye");
                    }
                });
            });
        </script>



        <!-- Required datatable js -->
        <script src="{{ asset('adminpanel/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>


        <!-- Buttons examples -->
        <script src="{{ asset('adminpanel/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/datatables/buttons.colVis.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('adminpanel/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

        <!-- Datatables init -->
        <script src="{{ asset('adminpanel/assets/js/pages/datatables.init.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

        <!-- Init js-->
        <script src="{{ asset('adminpanel/assets/js/pages/form-advanced.init.js') }}"></script>

        <!-- App js -->
        {{-- <script src="{{ asset('adminpanel/assets/js/app.min.js') }}"></script> --}}


        <!-- Summernote -->
        <script src="{{ asset('adminpanel/assets/libs/summernote/summernote-bs4.min.js') }}"></script>

        <!-- Init js -->
        <script src="{{ asset('adminpanel/assets/js/pages/form-summernote.init.js') }}"></script>



        <!-- Init js-->
        <script src="{{ asset('adminpanel/assets/js/pages/form-quilljs.init.js') }}"></script>

        <script src="{{ asset('adminpanel/assets/libs/katex/katex.min.js') }}"></script>

        <script src="{{ asset('adminpanel/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>



        <!-- switch button  -->
        <script src="{{ asset('adminpanel/assets/libs/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('adminpanel/assets/js/pages/form-advanced.init.js') }}"></script>



        <script type="text/javascript">
            $(document).ready(function() {
                $('#summernote1').summernote({
                    height: 100
                });

            });

            $(document).ready(function() {
                $('#summernote2').summernote({
                    height: 100,
                });

            });
            $(document).ready(function() {
                $('#summernote3').summernote({
                    height: 100,
                });

            });
            $(document).ready(function() {
                $('#summernote4').summernote({
                    height: 100,
                });

            });
        </script>
