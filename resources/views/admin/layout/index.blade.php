<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sub</title>


    <link type="text/css" href="{{asset('backend/css/vendor-morris.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('backend/css/vendor-bootstrap-datepicker.css')}}" rel="stylesheet">

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- App CSS -->
    <link type="text/css" href="{{asset('backend/css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('backend/css/app.rtl.css')}}" rel="stylesheet">

    <!-- Simplebar -->
    <link type="text/css" href="{{asset('backend/vendor/simplebar.css')}}" rel="stylesheet">

    {{-- Datatable --}}
    <link type="text/css" href="{{asset('backend/css/vendor-bootstrap-datatables.css')}}" rel="stylesheet">
    {{-- /Datatable --}}

</head>

<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px" data-has-scrolling-region>

        <div class="mdk-drawer-layout__content">
            <!-- header-layout -->
            <div class="mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable">
                
                <!-- begin header -->
                    @include('admin.layout.header')
                    @yield('header')
                <!-- end header -->

                <!-- begin content -->
                    @include('admin.layout.content')
                    @yield('content')
                <!-- end content -->

            </div>

        </div>
        <!-- // END drawer-layout__content -->
            @include('admin.layout.left_drawer')
            @yield('left_drawer')
        <!-- drawer -->
        
        <!-- // END drawer -->

        <!-- drawer -->
            @include('admin.layout.right_drawer')
            @yield('right_drawer')
        <!-- // END drawer -->

    </div>
    <!-- // END drawer-layout -->



    <!-- jQuery -->
    <script src="{{asset('backend/vendor/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('backend/vendor/popper.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap.min.js')}}"></script>

    <!-- Simplebar -->
    <!-- Used for adding a custom scrollbar to the drawer -->
    <script src="{{asset('backend/vendor/simplebar.js')}}"></script>


    <!-- Vendor -->
    <script src="{{asset('backend/vendor/Chart.min.js')}}"></script>
    <script src="{{asset('backend/vendor/moment.min.js')}}"></script>

    <!-- APP -->
    <script src="{{asset('backend/js/color_variables.js')}}"></script>
    <script src="{{asset('backend/js/app.js')}}"></script>


    <script src="{{asset('backend/vendor/dom-factory.js')}}"></script>
    <!-- DOM Factory -->
    <script src="{{asset('backend/vendor/material-design-kit.js')}}"></script>
    <!-- MDK -->



    <script>
        (function() {
            'use strict';
            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit()


            // Connect button(s) to drawer(s)
            var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')

            sidebarToggle.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                    var drawer = document.querySelector(selector)
                    if (drawer) {
                        if (selector == '#default-drawer') {
                            $('.container-fluid').toggleClass('container--max');
                        }
                        drawer.mdkDrawer.toggle();
                    }
                })
            })
        })()
    </script>


    <script src="{{asset('backend/vendor/morris.min.js')}}"></script>
    <script src="{{asset('backend/vendor/raphael.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('backend/js/datepicker.js')}}"></script>

    {{-- Datatable --}}
    <script src="{{asset('backend/vendor/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/vendor/dataTables.bootstrap4.js')}}"></script>

    <script>
        $('#data-table').dataTable();
    </script>
    {{-- /Datatable --}}

    <script>
        $(function() {
            // window.morrisDashboardChart = new Morris.Area({
            //     element: 'morris-area-chart',
            //     data: [{
            //             year: '2017-01',
            //             a: 6352.27
            //         },
            //         {
            //             year: '2017-02',
            //             a: 4309.98
            //         },
            //         {
            //             year: '2017-03',
            //             a: 1465.98
            //         },
            //         {
            //             year: '2017-04',
            //             a: 1298.25
            //         },
            //         {
            //             year: '2017-05',
            //             a: 3209
            //         },
            //         {
            //             year: '2017-06',
            //             a: 2083
            //         },
            //         {
            //             year: '2017-07',
            //             a: 1285.23
            //         },
            //         {
            //             year: '2017-08',
            //             a: 1289
            //         },
            //         {
            //             year: '2017-09',
            //             a: 4430
            //         },
            //         {
            //             year: '2017-10',
            //             a: 8921.19
            //         }
            //     ],
            //     xkey: 'year',
            //     ykeys: ['a'],
            //     labels: ['Earnings'],
            //     lineColors: ['#fff'],
            //     fillOpacity: '0.2',
            //     gridEnabled: true,
            //     gridTextColor: '#ffffff',
            //     resize: true
            // });

        });
    </script>


</body>

</html>