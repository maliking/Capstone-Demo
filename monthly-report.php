<?php
require("databaseConnection.php");

$dbConn = getConnection();
$sql = "SELECT * FROM commInfo";
$stmt = $dbConn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>


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
                            <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-xs-4">
                    <div class="box">

                        <div class="box-body">
                            <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-xs-4">
                    <div class="box">

                        <div class="box-body">
                            <canvas id="myChart" width="400" height="400"></canvas>
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
    new Chart(document.getElementById("myChart"),
        {
            "type": "line",
            
            "data": {
                        "labels": ["January","February","March","April","May","June","July"],
                        "datasets": [{
                            "label": "2018",
                            "data":[32834,43292,32395,49323,46953,55023,39432],
                            "backgroundColor": "rgb(127, 127, 127,0.4)",
                            "borderColor":"rgb(127, 127, 127)",
                            "lineTension":0.1
                        },{
                            "label": "2017",
                            "data":[35782,39234,30043,33944,47912,60934,30453],
                            "fill":true,
                            "backgroundColor":"rgb(75, 192, 192,0.4)",
                            "borderColor":"rgb(75, 192, 192)",
                            "lineTension":0.1
                        }]
                    },
            "options":{
               scales: {
                   
            yAxes: [{
                ticks: {
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return '$' + value;
                    }
                }
            }]
        } 
        
            }});
</script>

</body>

</html>
