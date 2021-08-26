<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'DIT Restuarant') }}</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('assets/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        #box {
        padding:5px;
        width:80px;
        z-index: 5;
        position:relative;  
        }
        #box form {
        background:#006699;
        padding:5px;
        display:none;
        position:absolute;
        top:27px;
        }
        #but-ton {
        width:75px;
        background:#006699;
        color:#fff;
        padding:3px 10px;
        border:1px solid #006699;  
        margin-bottom:15px;  
        cursor:pointer;
        }
        input[type="submit"] {
        background:none;
        color:#fff;
        border:none;
        text-align:left;
        cursor:pointer;
    }

        ::-webkit-datetime-edit-day-field:not([aria-valuenow]),
        ::-webkit-datetime-edit-month-field:not([aria-valuenow]),
        ::-webkit-datetime-edit-year-field:not([aria-valuenow]){
            color: transparent;
        }
    </style>
</head>

<body>
        @if (Request::is('admin*'))
            @include('partials.sidebar')
            @include('partials.navbar')   
        @endif
    <div class="content-wrap">
        <div class="main">
            @include('partials.alerts')
            @yield('content')
        </div>
    </div>
 

    <!-- jquery vendor -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('assets/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/lib/preloader/pace.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery-3.6.0.js') }}"></script>
    <!-- sidebar -->

    <script>
        $("#but-ton").click(function() {            
            $("#box form").toggle("slow");
            return false;
        }); 
        $("#button").click(function() {            
            $("#box form").toggle("slow");
            return false;
        });              
        function formatRows(main, prefer, common) {
            return '<tr><td class="col-xs-2"><input type="text" value="' +main+ '" class="form-control editable" /></td>' +
                    '<td class="col-xs-4"><input type="text" value="' +prefer+ '" class="form-control editable" /></td>' +
                    '<td class="col-xs-3"><input type="text" value="' +common+ '" class="form-control editable" /></td>' +
                    '<td class="col-xs-2"><input type="text" value="' +common+ '" class="form-control editable" /></td>' +
                    '<td class="col-xs-2"><input type="text" value="' +common+ '" class="form-control editable" /></td>' +
                    '<td class="col-xs-2"><input type="text" value="' +common+ '" class="form-control editable" /></td>' +
                    '<td class="col-xs-2"><input type="text" value="' +common+ '" class="form-control editable" /></td>' +
                    '<td class="col-xs-1 text-center"><a href="#" onClick="deleteRow(this)">' +
                    '<i class="fa fa-trash-o" aria-hidden="true"></a></td></tr>';
            };

            function deleteRow(trash) {
            $(trash).closest('tr').remove();
            };

            function addRow() {
            var main = $('.addMain').val();
            var preferred = $('.addPrefer').val();
            var common = $('.addCommon').val();
            $(formatRows(main,preferred,common)).insertAfter('#addRow');
            $(input).val('');  
            }

            $('.addBtn').click(function()  {
            addRow();
        });
    </script>

    <script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar-2/pignose.init.js') }}"></script>

    
    <script src="{{ asset('assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/js/dashboard2.js') }}"></script>
</body>

</html>