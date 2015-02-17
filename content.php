<!-- main body container containing sidebar  and content -->
<!--sidebar span =3 and content span = 9 -->

<div class="container-fluid">
    <div class="row-fluid" >
        <!--sidebar span 3-->
        <div class="span3" id="sidebar">

            <?php include_once "sidebar.php"; ?>

        </div>

        <!--  main content body span 9 containing messeage header, breadcrumb, block for dashboard   -->
        <div class="span9" id="content">

<?php
// load blocks
              include_once "breadcrumb.php";
        //      include_once "b_piechart_statistics.php";
//              include_once "b_chart_morris_stacked.php";
//              include_once "b_two_s_table.php";
//              include_once "b_basic_table.php";
//              include_once "b_striped_table.php";
//              include_once "b_border_table.php";
//              include_once "b_hover_table.php";
//              include_once "b_condensed_table.php";
//              include_once "b_row_classes_table.php";
//              include_once "b_datatable.php";
//              include_once "b_datatable_with_toolbar.php";
//              include_once "b_gallery.php";

?>


        </div>


    </div><!-- end of row-fluid -->
</div>  <!-- end of container-fluid -->