<!DOCTYPE html>
<html lang="en">
<?php include 'template/header.php'; ?>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'template/sidebar.php'; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Google Maps</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Google Maps Page</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3>Simple Basic Map</h3>
                            <div id="gmaps-simple" class="gmaps"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <?php include 'template/footer.php'; ?>
   
</body>

</html>
