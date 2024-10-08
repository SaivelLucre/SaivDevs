<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-School Profiling And Admission Monitoring</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Font (Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    
    body {
        font-family: 'Roboto', sans-serif;
        
    
    }

    .card-header {
        background-color: sienna;
    }
    .widget {
        margin-bottom: 1.5rem;
        display: flex;
        flex-direction: column;
        height: 100%; 
    }
    .overview-card .card-header {
        background-color: #007bff;
        color: #fff;
    }
    .alerts-notifications-card .card-header {
        background-color: #ffc107;
        color: white;
    }
    .reminder-card {
        margin-top: 20px;
    }
    .reminder-title {
        font-weight: bold;
        font-size: 1.3rem;
    }
    .reminder-item {
        padding: 10px;
        border-bottom: 1px solid #dee2e6;
    }
    .reminder-item:last-child {
        border-bottom: none; 
    }
    .date {
        color: #6c757d; 
        font-size: 0.9rem;
    }
    .important {
        color: #dc3545; 
    }
    
    .performance-scores-card {
        max-width: 100%; 
        height: auto;   
    }
    .performance-chart-card {
        max-width: 100%; 
        height: auto;    
        margin-top: 0px; 
    }
    .performance-scores-card table {
        font-size: 0.9rem; 
    }
    .widget {
        margin-bottom: 2rem; /* Slightly reduce the spacing between widgets */
    }

    /* Adjust styles for the performance chart */
    .chart-container {
        position: relative; /* Ensures proper layout */
        width: 150%; /* Ensure full width */
        height: 483px; /* Set a fixed height for the chart */
        padding-top: 10px; /* Optional: Add padding if needed */
    }
    #performanceChart {
        width: 67% !important; /* Ensure the chart takes full width */
        height: 100% !important; /* Ensure the chart takes full height */
    }
</style>


  
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/homepage') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
              </li>
          </ul>
        </nav>
      
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Pre-School</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}"class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/profiling') }}" class="nav-link">  
                                <i class="nav-icon fas fa-users"></i>
                                <p>Profiling</p>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ url('/assessment') }}"class="nav-link" data-toggle="modal" data-target="#assessmentModal">
                              <i class="nav-icon fas fa-clipboard-list"></i>
                              <p>Assessment</p>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="{{ url('/report') }}"class="nav-link" data-toggle="modal" data-target="#assessmentModal">
                              <i class="nav-icon fas fa-file-alt"></i>
                              <p>Report</p>
                          </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <!-- Overview -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card widget overview-card">
                                <div class="card-header">
                                    <h3 class="card-title">Overview</h3>
                                </div>

                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <span>Total Number of Students:</span>
                                        <strong>40</strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Active Students:</span>
                                        <strong>40</strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>New Student Enrolled:</span>
                                        <strong>0</strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Total Number of Teachers:</span>
                                        <strong>1</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Alerts and Notifications Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card widget alerts-notifications-card">
                                <div class="card-header">
                                    <h3 class="card-title">Alerts & Notifications</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i> Pre-School Celebration Anniversary on Oct.30, 2024</li>
                                        <li><i class="fas fa-info-circle"></i> Christmas Party on December 18, 2024</li>
                                        <li><i class="fas fa-info-circle"></i> PTA Meeting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Developmental Domains Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card widget alerts-notifications-card">
                                <div class="card-header">
                                    <h3 class="card-title">Developmental Domains</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li>Cognitive Development</li>
                                        <li>Language and Communication</li>
                                        <li>Motor Skills</li>
                                        <li>Social and Emotional Development</li>
                                        <li>Self-Help Skills</li>        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card reminder-card">
                                <div class="card-header">
                                    <h2 class="reminder-title">Upcoming Deadlines</h2>
                                </div>
                                <div class="card-body">
                                    <div class="reminder-item">
                                        <span class="important">Enrollment Deadline:</span> <span class="date">June 2, 2024</span>
                                    </div>
                                    <div class="reminder-item">
                                        <span class="important">Submission of Report Cards:</span> <span class="date">October 15, 2024</span>
                                    </div>
                                    <div class="reminder-item">
                                        <span>PTA Meeting:</span> <span class="date">April 20, 2024</span>
                                    </div>
                                    <div class="reminder-item">
                                        <span class="important">School Anniversary Celebration:</span> <span class="date">October 1, 2024</span>
                                    </div>
                                    <div class="reminder-item">
                                        <span>End of Term Exams:</span> <span class="date">November 5-9, 2024</span>
                                    </div>
                                    <div class="reminder-item">
                                        <span class="important">Christmas Party Planning:</span> <span class="date">December 15, 2024</span>
                                    </div>
                                    <div class="reminder-item">
                                        <span class="important">Anniversary:</span> <span class="date">January 30, 2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>

               <!-- Performance Scores Card -->
<div class="col-md-12 col-lg-4">
    <div class="card widget performance-scores-card">
        <div class="card-header bg-info">
            <h3 class="card-title">Assessment Performance Scores</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive"> <!-- Make table responsive -->
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Developmental Progress</th>
                            <th>Assessment 1</th>
                            <th>Assessment 2</th>
                            <th>Assessment Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cognitive Development</td>
                            <td>average</td>
                            <td>good</td>
                            <td>87.5</td> 
                        </tr>
                        <tr>
                            <td>Language and Communication Skills</td>
                            <td>very good</td>
                            <td>very good</td>
                            <td>90.0</td> 
                        </tr>
                        <tr>
                            <td>Motor Skills</td>
                            <td>great</td>
                            <td>good</td>
                            <td>82.5</td> 
                        </tr>
                        <tr>
                            <td>Social and Emotional Development</td>
                            <td>good</td>
                            <td>very good</td>
                            <td>77.5</td> 
                        </tr>
                        <tr>
                            <td>Self-Help Skills</td>
                            <td>very good</td>
                            <td>very good</td>
                            <td>77.5</td> 
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Chart Card -->
<div class="col-md-12 col-lg-8"> <!-- Adjusted column width -->
    <div class="card widget performance-chart-card">
        <div class="card-header bg-info">
            <h3 class="card-title">Performance Chart</h3>
        </div>
        <div class="card-body chart-container">
            <canvas id="performanceChart"></canvas>
        </div>
    </div>
</div>



<script>
<!-- Include Chart.js and Chart.js Data Labels Plugin -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

<script>
   // Sample data for the chart
   const ctx = document.getElementById('performanceChart').getContext('2d');
   const performanceChart = new Chart(ctx, {
       type: 'line', // Use line chart for the zigzag effect
       data: {
           labels: ['Cognitive', 'Language', 'Motor', 'Social', 'Self-Help'],
           datasets: [{
               label: 'Assessments 2025',
               data: [85, 95, 70, 90, 80], // Adjust data for sharp transitions
               backgroundColor: 'rgba(0, 0, 0, 0)', // Transparent background
               borderColor: 'rgba(255, 99, 132, 1)', // Color of the line
               borderWidth: 3, // Width of the line
               fill: false, // No filling under the line
               tension: 0 // Set tension to 0 for sharp corners
           }]
       },
       options: {
           scales: {
               y: {
                   beginAtZero: true
               }
           },
           plugins: {
               // Configure the datalabels plugin
               datalabels: {
                   anchor: 'end',
                   align: 'end',
                   formatter: function(value) {
                       return value + '%'; // Add % sign
                   },
                   color: 'rgba(0, 0, 0, 1)', // Change color of the data labels
                   font: {
                       weight: 'bold',
                       size: 12
                   }
               }
           }
       },
       plugins: [ChartDataLabels] // Register the datalabels plugin
   });
</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>

</body>
</html>
