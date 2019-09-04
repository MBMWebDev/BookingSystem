
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>




<!-- jQuery 2.2.3 -->
<script src="{{asset('admin_style/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('admin_style/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<!-- Sparkline -->
<script src="{{asset('admin_style/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('admin_style/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin_style/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin_style/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('admin_style/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin_style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin_style/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin_style/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_style/dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin_style/dist/js/demo.js')}}"></script>
  
<script type="text/javascript">
$(function () {                                
                $('#datetimepicker2').datetimepicker({
                  useCurrent: false //Important! See issue #1075
                });
            });

$("#TextBox1").datepicker({
                          minDate: 0,
                          maxDate: '+1Y+6M',
                          onSelect: function (dateStr) {
                              var min = $(this).datepicker('getDate'); // Get selected date
                              $("#TextBox2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
                          }
                      });
                      
                      $("#TextBox2").datepicker({
                          minDate: '0',
                          maxDate: '+1Y+6M',
                          onSelect: function (dateStr) {
                              var max = $(this).datepicker('getDate'); // Get selected date
                              $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
                              var start = $("#TextBox1").datepicker("getDate");
                              var end = $("#TextBox2").datepicker("getDate");
                              var days = (end - start) / (1000 * 60 * 60 * 24);
                              $("#TextBox3").val(days);
                          }
                      });
  //$('#datepickerss').daterangepicker({
    //  locale: {
      //      format: 'DD/MM/YYYY'
       // }
    //});
    </script>
    <script type="text/javascript">
      $('#yith-wcbk-booking-persons-type-389').change(function() {
      
      var input = $('#yith-wcbk-booking-persons-type-389').val();
      if (input == "0") {
              $('#yith-wcbk-booking-persons-type-450').hide();
              $('#yith-wcbk-booking-persons-type-451').hide();
              $('#yith-wcbk-booking-persons-type-452').hide();
              $('#yith-wcbk-booking-persons-type-453').hide();
          }
          else if (input == "1") {
              $('#yith-wcbk-booking-persons-type-450').show();
              $('#yith-wcbk-booking-persons-type-451').hide();
              $('#yith-wcbk-booking-persons-type-452').hide();
              $('#yith-wcbk-booking-persons-type-453').hide();
          }else if (input == "2"){
              $('#yith-wcbk-booking-persons-type-450').show();
              $('#yith-wcbk-booking-persons-type-451').show();
              $('#yith-wcbk-booking-persons-type-452').hide();
              $('#yith-wcbk-booking-persons-type-453').hide();
          }else if (input == "3"){
              $('#yith-wcbk-booking-persons-type-450').show();
              $('#yith-wcbk-booking-persons-type-451').show();
              $('#yith-wcbk-booking-persons-type-452').show();
              $('#yith-wcbk-booking-persons-type-453').hide();
          }else if (input == "4"){
              $('#yith-wcbk-booking-persons-type-450').show();
              $('#yith-wcbk-booking-persons-type-451').show();
              $('#yith-wcbk-booking-persons-type-452').show();
              $('#yith-wcbk-booking-persons-type-453').show();
          }
          
      });
      
</script>

<script type="text/javascript">
  $('#offre_id').on('change',function(){
    var price = $(this).children('option:selected').data('price');
    $('#price').val(price);
});
  
</script>




