<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RE/MAX Salinas | Roster</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- BEGIN TEMPLATE default-css.php INCLUDE -->
    <?php include "./templates-admin/default-css.php" ?>
    <!-- END TEMPLATE default-css.php INCLUDE -->
    <!-- PAGE-SPECIFIC CSS -->
    <link rel="stylesheet" href="./dist/css/vendor/footable.bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
                Agent Roster
            </h1>
            <ol class="breadcrumb">
                <li>Properties</li>
                <li class="active"><a href="#"><i class="fa fa-archive"></i> Current Inventory</a></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body no-padding">
                          <table class="table">
                            <thead>
                                    <tr>
                                            <th data-breakpoints="xs">ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr data-expanded="true">
                                            <td>1</td>
                                            <td>Dennise</td>
                                            <td>Fuhrman</td>
                                            <td>dennise@demo.com</td>
                                            <td>000-000-0000</td>
                                    </tr>
                                    <tr>
                                            <td>2</td>
                                            <td>Elodia</td>
                                            <td>Weisz</td>
                                            <td>elodia@demo.com</td>
                                            <td>000-000-0000</td>     
                                    </tr>
                                    <tr>
                                            <td>3</td>
                                            <td>Raeann</td>
                                            <td>Haner</td>
                                            <td>raeann@demo.com</td>
                                            <td>000-000-0000</td>     
                                    </tr>
                                    <tr>
                                            <td>4</td>
                                            <td>Junie</td>
                                            <td>Landa</td>
                                            <td>junie@demo.com</td>
                                            <td>000-000-0000</td>     
                                    </tr>
                                    <tr>
                                            <td>5</td>
                                            <td>Solomon</td>
                                            <td>Bittinger</td>
                                            <td>solomon@demo.com</td>
                                            <td>000-000-0000</td>     
                                    </tr>
                                    <tr>
                                            <td>6</td>
                                            <td>Bar</td>
                                            <td>Lewis</td>
                                            <td>bar@demo.com</td>
                                            <td>000-000-0000</td>     
                                    </tr>
                                    <tr>
                                            <td>7</td>
                                            <td>Usha</td>
                                            <td>Leak</td>
                                            <td>usha@demo.com</td>
                                            <td>000-000-0000</td>     
                                    </tr>
                                    <tr>
                                            <td>8</td>
                                            <td>Lorriane</td>
                                            <td>Cooke</td>
                                            <td>lorriane@demo.com</td>
                                            <td>000-000-0000</td>     
                                    </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->
<div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
    <style scoped>
        /* provides a red astrix to denote required fields - this should be included in common stylesheet */
        .form-group.required .control-label:after {
            content: "*";
            color: red;
            margin-left: 4px;
        }
    </style>
    <div class="modal-dialog" role="document">
        <form class="modal-content form-horizontal" id="editor" action="agent-roster.php" method="get">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="editor-title">Add A New Agent</h4>
            </div>
            <div class="modal-body">
                <input type="number" id="id" name="id" class="hidden"/>
                <input type="hidden" id="userId" name="id" class="hidden"/>

                <div class="form-group required">
                    <label for="license" class="col-sm-3 control-label">License</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="license" name="license" placeholder=""
                               onchange="getLicense()" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name"
                               required readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name"
                               required readonly>
                    </div>
                </div>

                <div class="form-group required">
                    <label for="firstName" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                               required>
                    </div>
                </div>

                <div class="form-group required">
                    <label for="firstName" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password"
                               required>
                    </div>
                </div>

                <div class="form-group required">
                    <label for="firstName" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="XXX-XXX-XXXX">
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Issued License Date</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="issuedDate" name="issuedDate" placeholder=""
                               readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">License Expiration Date</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="expirationDate" name="expirationDate" placeholder=""
                               readonly>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Save changes">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>


<!-- BEGIN TEMPLATE default-footer.php INCLUDE -->
<?php include "./templates-admin/default-footer.php" ?>
<!-- END TEMPLATE default-footer.php INCLUDE -->

<!-- BEGIN TEMPLATE default-js.php INCLUDE -->
<?php include "./templates-admin/default-js.php" ?>
<!-- END TEMPLATE default-js.php INCLUDE -->

<!-- PAGE-SPECIFIC JS -->
<script src="./dist/js/vendor/footable.min.js"></script>

<script>
jQuery(function($){
	$('.table').footable();
});
</script>
</body>

</html>
