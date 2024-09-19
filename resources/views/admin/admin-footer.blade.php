<footer class="footer text-center fixed-bottom">
    All Rights Reserved by Corporate Office Website. Designed and Developed by <a href="https://acquaintbd.com"
        target="_blank">Acquaint Technologies</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- All Jquery -->
<!-- ============================================================== -->
<script src="https://corporatetechbd.com/public//backend/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="https://corporatetechbd.com/public//backend/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js">
</script>
<script src="https://corporatetechbd.com/public//backend/extra-libs/sparkline/sparkline.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/flot/excanvas.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/flot/jquery.flot.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/flot/jquery.flot.pie.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/flot/jquery.flot.time.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/flot/jquery.flot.stack.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/flot/jquery.flot.crosshair.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

<script src="https://corporatetechbd.com/public//backend/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="https://corporatetechbd.com/public//backend/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="https://corporatetechbd.com/public//backend/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="https://corporatetechbd.com/public//backend/extra-libs/DataTables/datatables.min.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/select2/dist/js/select2.full.min.js"></script>
<script src="https://corporatetechbd.com/public//backend/libs/select2/dist/js/select2.min.js"></script>

<!--Wave Effects -->
<script src="https://corporatetechbd.com/public//backend/js/waves.js"></script>
<!--Menu sidebar -->
<script src="https://corporatetechbd.com/public//backend/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="https://corporatetechbd.com/public//backend/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'csvHtml5',
                text: 'Export CSV',
                title: 'Data Export'
            },
            {
                extend: 'pdfHtml5',
                text: 'Export PDF',
                title: 'Data Export'
            },
            {
                extend: 'print',
                text: 'Print Table',
                title: 'Data Export'
            }
        ]
    });
});
</script>






</body>

</html>
