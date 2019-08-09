<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CEL Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/js&jqueryfunc.js"></script>
<style>
    h5 {
   width: 100%; 
   text-align: left;
   border-bottom: 1px solid #000; 
   line-height: 0.2em;
   margin: 10px 0 20px; 
} 

h5 span { 
    background:#fff; 
    padding:0 10px; 
    font-size: 20px;
}
#m0, #m1, #m2, #m3, #m4, #m5, #m6, #m7{
  font-size: 12px;
}
</style>
</head>
</head>
<body class="sidebar-icon-only sidebar-fixed">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo"><img src="images/faces/cel.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini"><img src="images/faces/cel.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
       
        <ul class="navbar-nav navbar-nav-right">
       
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/noimage.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="fas fa-ellipsis-h"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas" >
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
                </div>
              </form>
            </div>
             <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
               
            
              
             
          
              </ul>
            </div>
           
          </div>
          <!-- To do section tab ends -->
          <!-- chat tab ends -->
        </div>
      </div>

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
         
          <li class="nav-item">
            <a class="nav-link" >
              <i class="fas fa-align-center" id="icons"></i>
               <span class="menu-title" id="m0">DASHBOARD</span>

            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#businesspartner" aria-expanded="false" aria-controls="businesspartner">
              <i class="fas fa-user-friends" id="icons"></i> 
              <span class="menu-title" id="m1">BUSINESS PARTNER</span>
               <i class="menu-arrow"></i>
                <i class="fa fa-chevron-down" style="margin-left: 15px; color: black;"></i>
            
            </a>
            <div class="collapse" id="businesspartner">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/customer_inquiry.html">Customer Inquiry</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/income_analysis.html">Income Analysis</a></li>
                <li class="nav-item"> <a class="nav-link" >Approval</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="fas fa-truck-moving" id="icons"></i>
              <span class="menu-title" id="m2">SERVICE PROVIDER</span>
              <i class="menu-arrow"></i>
              <i class="fa fa-chevron-down" style="margin-left: 17px; color: black;"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/service_provider.html">Service Provider</a></li>
                <li class="nav-item"> <a class="nav-link" >Service</a></li>
                <li class="nav-item"> <a class="nav-link" >Service</a></li>
               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-plane-departure" id="icons"></i>
              <span class="menu-title" id="m3">BOOKING</span>
              <i class="menu-arrow"></i>
              <i class="fa fa-chevron-down" style="margin-left: 75px; color: black;"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/booking.html">Booking</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/job_order.html">Job Order</a></li> 
              </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="far fa-chart-bar" id="icons"></i>
              <span class="menu-title" id="m4">REPORTS</span>
              <i class="menu-arrow"></i>
              <i class="fa fa-chevron-down" style="margin-left: 76px; color: black;"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link">Clipboard</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="fas fa-balance-scale" id="icons"></i>
              <span class="menu-title" id="m5">FINANCE</span>
              <i class="menu-arrow"></i>
              <i class="fa fa-chevron-down" style="margin-left: 76px; color: black;"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/acc_payable.html">Accounts Payable</a></li>                
                <li class="nav-item"><a class="nav-link" href="pages/acc_recievable.html">Accounts Recievable</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="fas fa-cog" id="icons"></i>
              <span class="menu-title" id="m6">SETTINGS</span>
              <i class="menu-arrow"></i>
              <i class="fa fa-chevron-down" style="margin-left: 76px; color: black;"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/company_setup.html">Company Setup</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/user_config.html">User Configuration</a></li>
              </ul>
            </div>
          </li>

        
          <li class="nav-item nav-profile" style="padding-top: 100px;">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images/faces/noimage.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome Back
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel" id="mpanel">
        <div class="content-wrapper">
        
       

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-gift"></i>
                    Orders
                  </h4>
                  <canvas id="orders-chart"></canvas>
                  <div id="orders-chart-legend" class="orders-chart-legend"></div>                  
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-chart-line"></i>
                    Sales
                  </h4>
                  <h2 class="mb-5"><span class="text-muted h4 font-weight-normal"></span></h2>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">
                    <i class="fas fa-chart-pie"></i>
                    Sales status
                  </h4>
                  <div class="flex-grow-1 d-flex flex-column justify-content-between">
                    <canvas id="sales-status-chart" class="mt-3"></canvas>
                    <div class="pt-4">
                      <div id="sales-status-chart-legend" class="sales-status-chart-legend"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-calendar-alt"></i>
                    Calendar
                  </h4>
                  <div id="inline-datepicker-example" class="datepicker"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">
                    <i class="fas fa-tachometer-alt"></i>
                    Daily Sales
                  </h4>
                  <p class="card-description">Daily sales for the past one month</p>
                  <div class="flex-grow-1 d-flex flex-column justify-content-between">
                    <canvas id="daily-sales-chart" class="mt-3 mb-3 mb-md-0"></canvas>
                    <div id="daily-sales-chart-legend" class="daily-sales-chart-legend pt-4 border-top"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>

       
        

          
  
 


    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
