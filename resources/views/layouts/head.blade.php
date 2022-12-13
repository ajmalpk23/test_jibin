<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- NProgress -->
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- iCheck -->
    <link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet">

    <!-- JQVMap -->

    <link href="{{ asset('assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />

    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">


    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/build/css/custom.min.css') }}" rel="stylesheet">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    {{-- ----------------- Script------------------------- --}}
    {{-- Vue Js Script --}}

    <script src="{{ asset('assets/vuejs/dist/vue.js') }}"></script>
    <script src="{{ asset('assets/vuejs/axios/axios.min.js') }}"></script>
    <script src="{{ asset('assets/vuejs/ajax/libs/moment.min.js') }}"></script>

    {{-- multiselect --}}
    <link href="{{ asset('assets/vuejs/multi_select/vue-multiselect.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/vuejs/multi_select/vue-multiselect.min.js') }}"></script>

    {{-- toast-text-data --}}
    <link href="{{ asset('assets/vuejs/toast/vue_toast.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/vuejs/toast/vue_toast.js') }}"></script>

    <!-- Init the plugin -->
    <script>
        Vue.use(VueToast, {
            position: "top-right",
            duration: 5000,
            dismissible: true
        })
    </script>
    {{-- modal --}}
    <script src="{{ asset('assets/vuejs/dist/vue-js-modal.js?11') }}"></script>

    {{-- validation --}}
    <script src="{{ asset('assets/vuejs/vee_validate/veeValidate.js?11') }}"></script>
    <script>
        Vue.use(VeeValidate);
    </script>

    <script>
        Vue.component("vue-multiselect", window.VueMultiselect.default);
    </script>


    {{-- <script src="{{ asset('assets/vuejs/vue_moment/vue-moment.min.js') }}"></script>
    <script>
    Vue.use(vueMoment);
    Vue.use(moment);
    </script> --}}

    @yield('custom')

    <style>

        .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: table;
        transition: opacity 0.3s ease;
        }

        .modal-wrapper {
        display: table-cell;
        vertical-align: middle;
        }

        .modal-container {
        width: 300px;
        margin: 0px auto;
        padding: 20px 30px;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
        transition: all 0.3s ease;
        font-family: Helvetica, Arial, sans-serif;
        }

        .modal-header h3 {
        margin-top: 0;
        color: #42b983;
        }

        .modal-body {
        margin: 20px 0;
        }

        .modal-default-button {
        float: right;
        }

        /*
        * The following styles are auto-applied to elements with
        * transition="modal" when their visibility is toggled
        * by Vue.js.
        *
        * You can easily play with the modal transition by editing
        * these styles.
        */

        .modal-enter {
        opacity: 0;
        }

        .modal-leave-active {
        opacity: 0;
        }

        .modal-enter .modal-container,
        .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        }


    </style>

    <!-- template for the modal component -->
    {{-- <script type="text/x-template" id="modal-template">
        <transition name="modal" :resizable="true">
            <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                <div class="modal-header">
                    <button type="button" class="close" @click="$emit('close')">&times;</button>
                    <slot name="header">
                    default header
                    </slot>
                </div>

                <div class="modal-body">
                    <slot name="body">
                    default body
                    </slot>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                    default footer
                    <button class="modal-default-button" @click="$emit('close')">
                        OK
                    </button>
                    </slot>
                </div>
                </div>
            </div>
            </div>
        </transition>
    </script> --}}


</head>
