<?php echo view("layouts/product_header") ?>

<!-- Navbar -->
<?php echo view("layouts/top_nav") ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php echo view("layouts/mainsidebar") ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Orders</h1>





                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin">Home</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Month wise Order list</h3>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">Order List: </h1><br><br>
                            <form action="">
                                <label for="">Start Data:</label>
                                <input type="date" id="stardate"><br><br>
                                <label for="">Start Data:</label>
                                <input type="date" id="enddate" id=""><br><br>
                                <button type="button" id="reportbtn">Show Report</button>

                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class=" card-body">
                            <div id="show"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>



                    <!-- /.card -->
                </section>
            </div>
            <!-- DIRECT CHAT -->

            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->

    <!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php echo view("layouts/product_footer") ?>