  <footer class="main-footer">
      <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.0.0-alpha
      </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="./../assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="./../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="./../assets/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="./../assets/js/adminlte.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <!-- function delete list product -->
  <!-- style css -->
  <style>
    .removeRow{
      background: red !important;
      color: #FFFFFF;
    }
  </style>
  <script>
    $(document).ready(function(){

      $('.delete_checkbox').click(function(){
        if($(this).is(':checked'))
        {
          $(this).closest('tr').addClass('removeRow');
        }
        else
        {
          $(this).closest('tr').removeClass('removeRow');
        }
      })

      $('#delete_all').click(function(){
        var checkbox = $('.delete_checkbox:checked');
        if(checkbox.length > 0)
        {
          var checkbox_value = [];
          $(checkbox).each(function(){
            checkbox_value.push($(this).val());
          });

          $.ajax({
            url: "Delete/del_sanpham.php",
            method: "POST",
            data:{checkbox_value:checkbox_value},
            success: function()
            {
              $('.removeRow').fadeOut(1000);
            }
          });
        }
        else
        {
          alert("Select atleast one record");
        }


      })

    })
  </script>

</body>

</html>