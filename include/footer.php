<!-- /.container -->

    <?php
        if(isset($_GET['s'])){
            $s = $_GET['s'];
            switch ($s){
                case 'td':
                echo  '<script type="text/javascript" language="javascript">
                swal("Berjaya", "Pemadaman Rekod Berjaya", "success");</script>';
                break;
                case 'fd':
                echo  '<script type="text/javascript" language="javascript">
                swal("Gagal", "Pemadaman Rekod Gagal", "error");</script>';
                break;
                case 'tss':
                echo  '<script type="text/javascript" language="javascript">
                swal("Lulus", "Pencapaian Sub Skima Berjaya", "success");</script>';
                break;
                case 'fss':
                echo  '<script type="text/javascript" language="javascript">
                swal("Gagal", "Pencapaian Sub Skima Gagal", "error");</script>';
                break;
                case 'ftf':
                echo  '<script type="text/javascript" language="javascript">
                swal("Gagal", "Memuat naik telah gagal, Sila pastikan fail gambar berjenis .png atau .jpg sahaja dibenarkan", "error");</script>';
                break;
                case 'fes':
                echo  '<script type="text/javascript" language="javascript">
                swal("Gagal", "Memuat naik telah gagal, sila cuba lagi.", "error");</script>';
                break;
                case 'uf':
                echo  '<script type="text/javascript" language="javascript">
                swal("Gagal", "Memuat naik telah gagal, sila cuba lagi.", "error");</script>';
                break;
                default:
                }
    }
    ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="../js/jquery.min.js" ></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../include/dataTable/jquery.dataTables.min.js"></script>
    <script src="../include/dataTable/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
    <script>
    $(document).ready(function() {
        $('#example2').DataTable();
    } );
    </script>
    <script>
       $('#confirmation').click(function(e) {
        e.preventDefault(); // Prevent the href from redirecting directly
        var linkURL = $(this).attr("href");
        warnBeforeRedirect(linkURL);
        });
    
        function warnBeforeRedirect(linkURL) {
            swal({
            title: "Are you sure?", 
            text: "Caution! You cannot reverse this!", 
            type: "warning",confirmButtonColor: "#DD6B55",
            showCancelButton: true
            }, function() {
            // Redirect the user
            window.location.href = linkURL;
            });
        }
    </script>
  </body>

  
</html>
