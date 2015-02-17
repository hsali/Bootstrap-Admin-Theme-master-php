<div class="container">
    <div class="row">
        <div class="span3"></div>
       <div class="span9" style=" margin-left: 25%; margin-right: 25%;">
           <hr>
           <footer>
               <p>&copy; Vincent Gabriel 2013</p>
           </footer>
       </div>
    </div>
</div>

<!--/. end of fluid-container-->

<!--bootstrap library -->
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--easy pie chart library -->

<script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>

<!--sidebar on and off script-->
<script src="assets/scripts.js"></script>

<!--data table -->

<script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/DT_bootstrap.js"></script>
<?php //include_once "chart_scripts.php"; ?>
<script>
    $(function() {
        // Easy pie charts
        $('.chart').easyPieChart({animate: 1000});
    });
</script>
</body>

</html>