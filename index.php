<?php
date_default_timezone_set('America/Los_Angeles');
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RE/MAX Salinas | Dashboard</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
        <script src='dist/js/vendor/moment-with-locales.min.js'></script>


        <!-- BEGIN TEMPLATE default-css.php INCLUDE -->
        <?php include "templates-admin/default-css.php" ?>
        <!-- END TEMPLATE default-css.php INCLUDE -->


    </head>

    <body class="hold-transition skin-red-light sidebar-mini">
        <!-- Site Wrapper -->
        <div class="wrapper">

            <!-- BEGIN TEMPLATE header.php INCLUDE -->
            <?php include "templates-admin/header.php" ?>
            <!-- END TEMPLATE header.php INCLUDE -->

            <!-- BEGIN TEMPLATE nav.php INCLUDE -->
            <?php include "templates-admin/nav.php" ?>
            <!-- END TEMPLATE nav.php INCLUDE -->



            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <!-- Content Wrapper. Contains page content -->
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>4</h3>
                                    <p>Active Listings</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-flash"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>2</h3>
                                    <p>Pending Listings</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>3</h3>
                                    <p>Sold Listings</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-tag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3>
                                        <sup style="font-size: 20px">$</sup>14,903
                                    </h3>
                                    <p>Avg. Agent Commission</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <!-- ./col -->
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>2.21<sup
                                            style="font-size: 20px">%</sup></h3>

                                    <p>Avg. Agent Commission </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-percent"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <!-- ./col -->
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <sup style="font-size: 20px">$</sup> 32,493
                                    </h3>
                                    <p>Total Net Earnings</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bank"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-4">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar" ></div>
                                </div>
                                <!-- /.box-body -->
                            </div>    
                        </div>
                        <div class="col-xs-4">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Property Transaction Status</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table no-margin">
                                            <thead>
                                                <tr>
                                                    <th>MLS #</th>
                                                    <th>Address</th>
                                                    <th>Status</th>
                                                    <th>Due Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">70590778</a></td>
                                                    <td>230 Happy St, Salinas</td>
                                                    <td><span class="label label-success">Inspection</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">5/2 Wed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">95348384 </a></td>
                                                    <td>432 Granger Rd, Salinas</td>
                                                    <td><span class="label label-warning">Contingency</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#f39c12" data-height="20">5/4 Fri</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">79384834</a></td>
                                                    <td>70495 Reed Dr, Salinas</td>
                                                    <td><span class="label label-success">Inspection</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#f56954" data-height="20">5/8 Tues</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">71293274</a></td>
                                                    <td>4234 Rooter St, Monterey</td>
                                                    <td><span class="label label-info">Disclosure</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00c0ef" data-height="20">5/9 Wed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">64722358</a></td>
                                                    <td>213 Oceanside Dr, Sand City</td>
                                                    <td><span class="label label-warning">Contingency</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#f39c12" data-height="20">5/14 Mon</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">56958434</a></td>
                                                    <td>3213 Parat Rd, Seaside</td>
                                                    <td><span class="label label-danger">EMD</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#f56954" data-height="20">5/15 Tue</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="pages/examples/invoice.html">79843434</a></td>
                                                    <td>5340 Woard Dr, Salinas</td>
                                                    <td><span class="label label-success">Inspection</span></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">5/18 Fri</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.box-body -->
                            </div>    
                        </div>

                        <div class="col-xs-4">
                            <!-- BAR CHART -->
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">YTD Commission</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="chart">
                                        <canvas id="myLineChart" width="400" height="300"></canvas>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->



<!-- BEGIN TEMPLATE default-footer.php INCLUDE -->
<?php include "templates-admin/default-footer.php" ?>
<!-- END TEMPLATE default-footer.php INCLUDE -->

<!-- BEGIN TEMPLATE default-js.php INCLUDE -->
<?php include "templates-admin/default-js.php" ?>
<!-- END TEMPLATE default-css.php INCLUDE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script src="dist/js/vendor/Chart.bundle.min.js"></script>

<script>
    $(document).ready(function () {
    $('#calendar').fullCalendar({
    defaultView: 'listWeek',
            defaultDate: '2018-03-12',
            navLinks: true, // can click day/week names to navigate views

            weekNumbers: true,
            weekNumbersWithinDays: true,
            weekNumberCalculation: 'ISO',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
            {
            title: 'Pay Day',
                    start: '2018-03-11',
                    end: '2018-03-13',
                    color: 'red'
            },
            {
            title: 'Staff Meeting',
                    start: '2018-03-12T10:30:00',
                    end: '2018-03-12T12:30:00',
                    color: '#23b666'
            },
            {
            title: 'Call Ruth B.',
                    start: '2018-03-12T08:00:00'
            },
            {
            title: 'Call Amy R.',
                    start: '2018-03-12T13:15:00'
            },
            {
            title: 'Call Quentin S.',
                    start: '2018-03-12T15:30:00'
            },
            {
            title: 'Call Rena O.',
                    start: '2018-03-13T10:00:00'
            },
            {
            title: 'Call Paul E.',
                    start: '2018-03-13T10:30:00'
            },
            {
            title: 'Inspection | 230 Happy St, Salinas',
                    start: '2018-03-13T09:00:00',
                    color: '#fead14'
            }
            ]
    });
    });</script>
<script>
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
