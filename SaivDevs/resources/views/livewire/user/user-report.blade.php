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

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            height: 100vh; /* Tiyakin na ang body ay umaabot sa buong taas ng viewport */
        }

        .main-sidebar {
            height: 100vh; /* Pahabain ito sa 100% ng taas ng viewport */
            position: fixed; /* Manatiling nakaposisyon sa gilid */
            top: 0; /* Magsimula mula sa itaas ng viewport */
            left: 0; /* Magsimula mula sa kaliwa */
        }

        .content-wrapper {
            margin-left: 250px; /* Para maiwasan ang overlapping ng sidebar at content */
            height: 100vh; /* Tiyakin na ang content wrapper ay umabot sa buong taas ng viewport */
            overflow-y: auto; /* Mag-scroll kung kinakailangan */
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
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Pre-School</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ url('/profiling') }}" class="nav-link">  
                                <i class="nav-icon fas fa-users"></i>
                                <p>Student Profile</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ url('/assessment') }}" class="nav-link" data-toggle="modal" data-target="#assessmentModal">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>Assessment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/reports') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Content goes here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
