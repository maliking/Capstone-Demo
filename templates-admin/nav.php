<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- Sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <a href="index.php" class="logo">
            <!-- Logo -->
            <img class="img-responsive" src="dist/img/remax-logo.png">
        </a>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">OVERVIEW</li>
            <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="<?= ($activePage == 'agent-roster') ? 'active':''; ?>"><a href="agent-roster.php"><i class="fa fa-users"></i> <span>Agent Roster</span></a></li>
            <li class="<?= ($activePage == 'calendar') ? 'active':''; ?>"><a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
            <li class="header">PROPERTIES</li>
            <li class="<?= ($activePage == 'my-inventory') ? 'active':''; ?>"><a href="my-inventory.php"><i class="fa fa-home"></i> <span>My Inventory</span></a></li>
            <li class="<?= ($activePage == 'inventory') ? 'active':''; ?>"><a href="inventory.php"><i class="fa fa-building"></i> <span>Office Inventory</span></a></li>
            <li class="header">TRANSACTIONS</li>
            <li class="<?= ($activePage == 'sales-breakdown') ? 'active':''; ?>"><a href="sales-breakdown.php"><i class="fa fa-list-alt"></i> <span> Sales Breakdown</span></a></li>
            <li class="<?= ($activePage == 'monthly-report') ? 'active':''; ?>"><a href="monthly-report.php"><i class="fa fa-line-chart"></i> <span>Monthly Report</span></a></li>
            <li class="<?= ($activePage == 'c_sheet') ? 'active':''; ?>"><a href="c_sheet.php"><i class="fa fa-file-text-o"></i> <span>Commission Sheet Builder</span></a></li>
            <!-- <li class="<?= ($activePage == 'c_sheetReferral') ? 'active':''; ?>"><a href="c_sheetReferral.php"><i class="fa fa-file-text-o"></i> <span>Commission Sheet (Referral)</span></a></li> -->
            <!-- <li class="header">STATISTICS</li> -->
            <!-- <li class="<?= ($activePage == 'analytics') ? 'active':''; ?>"><a href="analytics.php"><i class="fa fa-line-chart"></i> <span> Analytics</span></a></li> -->
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
