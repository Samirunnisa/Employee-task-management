<!DOCTYPE html>
<html lang="en">
<head>
  <title>DOHUB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.theme.min.css">
  <link rel="stylesheet" href="./assets/bootstrap-datepicker/css/datepicker.css">
  <link rel="stylesheet" href="./assets/bootstrap-datepicker/css/datepicker-custom.css">
  <link rel="stylesheet" href="./assets/css/dohub.css">
  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/custom.js"></script>
  <script src="./assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="./assets/bootstrap-datepicker/js/datepicker-custom.js"></script>
  <script type="text/javascript">
    
    /* delete function confirmation  */
    function check_delete() {
      var check = confirm('Are you sure you want to delete this?');
        if (check) {
         
            return true;
        } else {
            return false;
      }
    }
  </script>
</head>
<body>

<nav class="navbar navbar-inverse sidebar navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="task-info.php"><span style="color:#452157; font-weight: bold; font-size:30px;">DOHUB</span></a>
    </div>

    <?php
    $user_role = $_SESSION['user_role'];
     if($user_role == 1){
    ?>
      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-nav-custom">
        <li <?php if($page_name == "Task_Info" ){echo "class=\"active\"";} ?>><a href="task-info.php" style="color:#df678c">Task Mangement<span style="font-size:16px; color:#df678c;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks" ></span></a></li>
        <li <?php if($page_name == "Attendance" ){echo "class=\"active\"";} ?>><a href="attendance-info.php" style="color:#df678c">Attendance <span style="font-size:16px; color:#df678c;" class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a></li>
        <li <?php if($page_name == "Send_Email" ){echo "class=\"active\"";} ?>><a href="mail.php" style="color:#df678c">Send Mail<span style="font-size:16px; color:#df678c;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope" ></span></a></li>
        <li <?php if($page_name == "Admin" ){echo "class=\"active\"";} ?>><a href="manage-admin.php" style="color:#df678c">Administration<span style="font-size:16px; color:#df678c;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
        <li <?php if($page_name == "Daily-Task-Report" ){echo "class=\"active\"";} ?>><a href="daily-task-report.php" style="color:#df678c">Task Report<span style="font-size:16px; color:#df678c;" class="pull-right hidden-xs showopacity glyphicon glyphicon-file"></span></a></li>
        <li <?php if($page_name == "Daily-Attennce-Report" ){echo "class=\"active\"";} ?>><a href="daily-attendance-report.php" style="color:#df678c">Attendance Report<span style="font-size:16px; color:#df678c;" class="pull-right hidden-xs showopacity glyphicon glyphicon-file"></span></a></li>
        <li ><a href="?logout=logout" style="color:#df678c">Logout<span style="font-size:16px; color:#df678c;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>
        
      </ul>
    </div>
    <?php 
     }else if($user_role == 2){

      ?>
          <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-nav-custom">
        <li <?php if($page_name == "Task_Info" ){echo "class=\"active\"";} ?>><a href="task-info.php">Task Management<span style="font-size:16px; color:#df678c;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>
        <li <?php if($page_name == "Attendance" ){echo "class=\"active\"";} ?>><a href="attendance-info.php">Attendance <span style="font-size:16px; color:#df678c;" class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a></li>
        <li ><a href="?logout=logout">Logout<span style="font-size:16px; color:#df678c" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>
      </ul>
    </div>

      <?php

     }else{
       header('Location: index.php');
     }

    ?>
    


  </div>
</nav>



<div class="main">