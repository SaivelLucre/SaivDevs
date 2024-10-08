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
      
        .card-header {
            background-color: sienna;
        }
        .widget {
            margin-bottom: 1.5rem;
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
                            <h1 class="m-0">Child Information</h1>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('profiling.submit') }}" method="POST">
                                @csrf
                                <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter full name">
</div>
<div class="form-group">
    <label for="middleName">Middle Name</label>
    <input type="text" name="middleName" class="form-control" id="middleName" placeholder="Enter full name">
</div>
<div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Enter full name">
</div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
                                </div>
                                <div class="form-group">
                                    <label for="birthDate">Birth Date</label>
                                    <input type="date" name="birthDate" class="form-control" id="birthDate">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" class="form-control" id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dateCreation">Date of Profile Creation</label>
                                    <input type="date" name="dateCreation" class="form-control" id="dateCreation">
                                </div>

                                <h2 class="mt-4">Family Information</h2><br>
                                <div class="form-group">
                                    <label for="motherName">Mother's Name</label>
                                    <input type="text" name="motherName" class="form-control" id="motherName" placeholder="Enter mother's name">
                                </div>
                                <div class="form-group">
                                    <label for="fatherName">Father's Name</label>
                                    <input type="text" name="fatherName" class="form-control" id="fatherName" placeholder="Enter father's name">
                                </div>
                                <div class="form-group">
                                    <label for="contactInfo">Contact Information</label>
                                    <input type="text" name="contactInfo" class="form-control" id="contactInfo" placeholder="Enter phone number">
                                </div>
                                <div class="form-group">
                                    <label for="emergencyContact">Emergency Contact</label>
                                    <input type="text" name="emergencyContact" class="form-control" id="emergencyContact" placeholder="Enter phone number">
                                </div>

                                <h2 class="mt-4">Development Information</h2><br>
                                <div class="form-group">
                                    <label for="allergies">Any Allergies?</label>
                                    <select name="allergies" class="form-control" id="allergies">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="healthCondition">Health conditions or concerns?</label>
                                    <input type="text" name="healthCondition" class="form-control" id="healthCondition" placeholder="Enter any Health Condition">
                                </div>
                                
                                <div class="form-group">
                                    <label for="specialNeeds">Does your child have any special needs or require additional support?</label>
                                    <select name="specialNeeds" class="form-control" id="specialNeeds">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                <button type="button" class="btn mt-4 ml-2" style="background-color: red; color: white;">Update</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
