<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

<!-- dataTables -->
{{--<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>--}}
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>


<!-- bootstrap datepicker -->
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- bootstrap time picker -->
{{--<script src="{{ asset('/plugins/timepicker/bootstrap-timepicker.js') }}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

<!-- select2 -->
<script src="{{ asset('/plugins/select2/select2.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<!-- Mis pluging -->
<script src="{{ asset('/plugins/chosen/chosen.jquery.min.js') }}"></script>

<script src="{{ asset('/plugins/select2/select2.full.min.js') }}"></script>

<!-- Datepair -->
<script src="{{ asset('/plugins/datepair/jquery.datepair.min.js') }}"></script>

<!-- Sales -->
<script src="{{ asset('/js/sales.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $('#flash-overlay-modal').modal();
    $(document).ready(function(){
        $('form').attr('autocomplete', 'off');
    });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

@yield('js')