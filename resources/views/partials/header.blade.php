<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BEKST</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('files/images/logoback.png') }}" />
  {{-- jquery css and datatable --}}
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/templatef/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/templatef/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/templatef/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/templatef/css/demo.css" />
    <link rel="stylesheet" href="/templatef/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/templatef/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="/app-assets/dropify/css/dropify.css" />
    <link rel="stylesheet" href="/app-assets/dropify/css/dropify.min.css" />
    <script src="/templatef/vendor/js/helpers.js"></script>
    <script src="/templatef/js/config.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!-- Bootstrap-Table css -->
 {{-- <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/plugins/sweetalert/sweetalert.css')}}" /> --}}
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/plugins/bootstrap-table/bootstrap-table.min.css')}}" />
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/plugins/bootstrap-table/extensions/filter-control/bootstrap-table-filter-control.min.css')}}" />
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.css')}}" />
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/plugins/bootstrap-table/extensions/sticky-header/bootstrap-table-sticky-header.min.css')}}" />
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/plugins/font-awesome/css/font-awesome.min.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/plugins/extensions/ext-component-toastr.min.css') }}"/>

 <link rel="stylesheet" type="text/css" href="{{ url('/toast-master/css/jquery.toast.css') }}"/>

 {{-- <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/toastrjs.min.css') }}"/> --}}


<!-- css and js for DataTables Server-side Processing -->
{{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>--}}

 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@yield('style')
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/leaflet.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/MarkerCluster.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/MarkerCluster.Default.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/leaflet-search.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/leaflet.awesome-markers.css')}}">
 <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/leaflet.fullscreen.css') }}"/>





 <!-- END: Bootstrap-Table css -->
 <link rel="stylesheet" href="{{ url('/app-assets/typeaheadjs.css') }}"/>
 <link rel="stylesheet" href="{{ url('/app-assets/summernote/dist/summernote.css') }}"/>

</head>
