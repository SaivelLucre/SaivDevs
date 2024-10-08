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

    <style>

        body {
            background-color: #f4f6f9; 
        }

        .main-sidebar {
            height: 100vh; 
            position: fixed; 
        }

        .wrapper {
            min-height: 100vh; 
        }

        .content-wrapper {
            margin-left: 100px; 
            min-height: calc(100vh - 56px); 
        }

        .sidebar {
            height: 200vh;
            position: fixed;
            overflow-y: auto; 
        }

        .form-group {
            margin-top: 50px; 
        }

        .age-input {
            margin-top: -50px; 
        }

        .form-group label[for="age"] {
            position: relative;
            top: -45px;
        }

        label[for="dateOfAssessment"] {
            position: relative; 
            top: -45px; 
        }

        #dateOfAssessment {
            margin-top: -50px; 
        }

        .wide-input {
            width: 1050px; /* Adjusted width for the Assessed by input */
            height: 40px; /* Keep the height consistent */
        }

        .label-container {
            display: flex;
            align-items: center;
            margin-top: -47px;
        }

        .label-container {
            display: flex; 
            justify-content: flex-start; 
            margin-left: 400px;

        }

        .label-container label {
            margin-bottom: 0;
            white-space: nowrap;
        }

        .assessed-by-input {
            flex-grow: 1; 
            width: auto; 
        }
        
        th, td {
            border: 3px solid #ddd;
            padding: 15px;
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
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/attendance') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Student Attendance</p>
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
                    <h1>Pre-School Assessment</h1>
                    
                    <div class="form-group">
                        <label for="name">Student Name</label>
                        <input type="text" name="name" class="form-control custom-input" id="name" placeholder="Enter name" style="width:1050px; height: 40px;">
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="age">Age</label>
                                <input type="number" name="age" class="form-control custom-input age-input" id="age" placeholder="Select Age" style="width:150px;">
                            </div>
    
                            <div class="col-md-4">
                                <label for="dateOfAssessment">Date of Assessment</label>
                                <input type="date" name="dateOfAssessment" class="form-control custom-input" id="dateOfAssessment" placeholder="Select date" style="width:200px;">
                            </div>

                            <div class="col-md-4r label-container"> 
                                <label for="assessedBy" style="margin-left: 15px;">Assessed by:</label>
                                <input type="text" name="assessedBy" class="form-control wide-input" id="assessedBy" placeholder="Enter name" style="width: 548px; height: 40px; margin-left: 10px;">
                            </div>
                        </div>
                    </div>

                    <!-- Checklist Section Start -->
                    <h2 style="margin-top: 80px;">Assessment</h2>
                    <table style="width: 205%; border-collapse: collapse;">
                        <tr>
                            <th>Question</th>
                            <th>Yes</th>
                            <th>No</th>
                        </tr>
                        <tr>
                            <td>Did you complete Task 1?</td>
                            <td><input type="radio" name="task1" value="yes"></td>
                            <td><input type="radio" name="task1" value="no"></td>
                        </tr>
                        <tr>
                            <td>Did you finish Task 2?</td>
                            <td><input type="radio" name="task2" value="yes"></td>
                            <td><input type="radio" name="task2" value="no"></td>
                        </tr>
                        <tr>
                            <td>Did you review Task 3?</td>
                            <td><input type="radio" name="task3" value="yes"></td>
                            <td><input type="radio" name="task3" value="no"></td>
                        </tr>
                        <tr>
                            <td>Did you submit Task 4?</td>
                            <td><input type="radio" name="task4" value="yes"></td>
                            <td><input type="radio" name="task4" value="no"></td>
                        </tr>
                        <tr>
                            <td>Did you verify Task 5?</td>
                            <td><input type="radio" name="task5" value="yes"></td>
                            <td><input type="radio" name="task5" value="no"></td>
                        </tr>
                    </table>
                    <!-- Checklist Section End -->
                    
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</body>
</html>
