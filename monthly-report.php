<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RE/MAX Salinas | Monthly Report</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- BEGIN TEMPLATE default-css.php INCLUDE -->
        <?php include "./templates-admin/default-css.php" ?>
        <!-- END TEMPLATE default-css.php INCLUDE -->


    </head>

    <body class="hold-transition skin-red-light sidebar-mini">
        <!-- Site Wrapper -->
        <div class="wrapper">
            <!-- BEGIN TEMPLATE header.php INCLUDE -->
            <?php include "./templates-admin/header.php" ?>
            <!-- END TEMPLATE header.php INCLUDE -->

            <!-- BEGIN TEMPLATE nav.php INCLUDE -->
            <?php include "./templates-admin/nav.php" ?>
            <!-- END TEMPLATE nav.php INCLUDE -->
            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Monthly Report
                    </h1>
                    <ol class="breadcrumb">
                        <li>Transactions</li>
                        <li class="active"><a href="#"><i class="fa fa-archive"></i> Monthly Report</a></li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">YTD Commission</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <canvas id="myLineChart" width="400" height="300"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">YTD Property Sales</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <canvas id="myChart" width="400" height="300"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Property Transaction Status</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <canvas id="myChart" width="400" height="300"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
    
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.wrapper -->

        <!-- BEGIN TEMPLATE default-footer.php INCLUDE -->
        <?php include "./templates-admin/default-footer.php" ?>
        <!-- END TEMPLATE default-footer.php INCLUDE -->

        <!-- BEGIN TEMPLATE default-js.php INCLUDE -->
        <?php include "./templates-admin/default-js.php" ?>
        <!-- END TEMPLATE default-js.php INCLUDE -->
        <!-- PAGE-SPECIFIC JS -->
        <script src="dist/js/vendor/Chart.bundle.min.js"></script>
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                "type": "bar",

                "data": {
                    "labels": ['January', 'February', 'March', 'April'],
                    "datasets": [{
                            label: '2016',
                            "backgroundColor": 'rgba(121,121,121,.3)',
                            "borderColor": 'rgba(121,121,121)',
                            "borderWidth": 2,
                            data: [1, 1, 1, 2]
                        },
                        {
                            label: '2017',
                            "backgroundColor": 'rgba(60,141,188,.7)',
                            "borderColor": 'rgba(60,141,188)',
                            "borderWidth": 2,
                            data: [2, 2, 3, 2]
                        }]
                },
                "options": {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    max: 4,
                                    minStepSize: 1,
                                    stepSize: 1
                                },
                                scaleLabel: {
                                    display: true,
                                    labelString: '# of Properies Sold'
                                }
                            }]
                    }
                }

            });


            var ctx = document.getElementById("myLineChart").getContext('2d');
            var myChart = new Chart(ctx, {
                "type": "line",

                "data": {
                    "labels": ["January", "February", "March", "April"],
                    "datasets": [{
                            //blue
                            "label": "2018",
                            "data": [38524, 42943, 31934, 38543],
                            "fill": false,
                            "borderColor": "rgb(75, 192, 192, 0.8)"
                        }, {
                            //grey
                            "label": "2017",
                            "data": [35782, 39234, 30043, 33944, 47912],
                            "fill": false,
                            "borderColor": "rgb(127, 127, 127, 0.4)"
                        }]
                },
                "options": {
                    scales: {

                        yAxes: [{
                                ticks: {
                                    // Include a dollar sign in the ticks
                                    callback: function (value, index, values) {
                                        return '$' + value;
                                    }
                                }
                            }]
                    }

                }});

            var ctx = document.getElementById("salesChart").getContext('2d');
            var myChart = new Chart(ctx, {
                "type": "line",
                "data": {
                    "labels": ["January", "February", "March", "April"],
                    "datasets": [{
                            //blue
                            "label": "2018",
                            "data": [38524, 42943, 31934, 38543],
                            "fill": false,
                            "borderColor": "rgb(75, 192, 192, 0.8)"
                        }, {
                            //grey
                            "label": "2017",
                            "data": [35782, 39234, 30043, 33944, 47912],
                            "fill": false,
                            "borderColor": "rgb(127, 127, 127, 0.4)"
                        }]
                }
            });

        </script>

    </body>

</html>
