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
                        <div class="col-xs-4">
                            <div class="box">

                                <div class="box-body">
                                    <canvas id="myLineChart" width="400" height="300"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-xs-4">
                            <div class="box">

                                <div class="box-body">
                                    <canvas id="myChart" width="400" height="300"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-xs-4">
                            <div class="box">

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
                type: 'bar',
                data: {
                    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                    datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });


            var ctx = document.getElementById("myLineChart").getContext('2d');
            var myChart = new Chart(ctx, {
                "type": "line",

                "data": {
                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                    "datasets": [{
                            "label": "2018",
                            "data": [32834, 43292, 32395, 49323, 46953, 55023, 39432],
                            "backgroundColor": "rgb(127, 127, 127,0.4)",
                            "borderColor": "rgb(127, 127, 127)",
                            "lineTension": 0.1
                        }, {
                            "label": "2017",
                            "data": [35782, 39234, 30043, 33944, 47912, 60934, 30453],
                            "fill": true,
                            "backgroundColor": "rgb(75, 192, 192,0.4)",
                            "borderColor": "rgb(75, 192, 192)",
                            "lineTension": 0.1
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
        </script>

    </body>

</html>
