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
            background-color: #f4f6f9; 
            font-family: 'Roboto', sans-serif;
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
            width: 1050px; 
            height: 40px; 
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
            padding: 13px;
        }

        .btn-primary {
            background-color: #007bff; 
            border: none; 
            color: white; 
            padding: 10px 30px; 
            font-size: 16px; 
            border-radius: 5px; 
            cursor: pointer; 
            transition: background-color 0.3s ease; 
            margin-top: 20px; 
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }



    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                                <p>Profiling</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/assessment') }}" class="nav-link" data-toggle="modal" data-target="#assessmentModal">
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
                        <input type="text" name="name" class="form-control custom-input" id="name" placeholder="Enter name" style="width:1020px; height: 40px;">
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="age">Age</label>
                                <input type="number" name="age" class="form-control custom-input age-input" id="age" placeholder="Select Age" style="width:160px;">
                            </div>
    
                            <div class="col-md-4">
                                <label for="dateOfAssessment">Date of Assessment</label>
                                <input type="date" name="dateOfAssessment" class="form-control custom-input" id="dateOfAssessment" placeholder="Select date" style="width:200px;">
                            </div>

                            <div class="col-md-4r label-container"> 
                                <label for="assessedBy" style="margin-left: 15px;">Assessed by:</label>
                                <input type="text" name="assessedBy" class="form-control wide-input" id="assessedBy" placeholder="Enter name" style="width: 515px; height: 40px; margin-left: 10px;">
                            </div>
                        </div>
                    </div>

                    <!-- Checklist -->

                    <table style="width: 200%; margin-top:50px; border-collapse: collapse;">

                    <tr style="background-color: black;">
                        <th colspan="3" style="text-align: center; font-size: 17px;  color: white;">Cognitive Development</th>
                    </tr>
                        
                    
                        <tr>
                            <th>Behavior</th>
                            <th>Yes</th>
                            <th>No</th>
                        </tr>
                        <tr>
                            <td>Does the child know the difference between a circle and a square?</td>
                            <td><input type="radio" name="task1" value="yes"></td>
                            <td><input type="radio" name="task1" value="no"></td>
                        </tr>
                        <tr>
                            <td>Can the child count to 10?</td>
                            <td><input type="radio" name="task2" value="yes"></td>
                            <td><input type="radio" name="task2" value="no"></td>
                        </tr>
                        <tr>
                            <td>Can a child finish a basic task on their own?</td>
                            <td><input type="radio" name="task3" value="yes"></td>
                            <td><input type="radio" name="task3" value="no"></td>
                        </tr>
                        <tr>
                            <td>Can the child vocally convey what they need and want?</td>
                            <td><input type="radio" name="task4" value="yes"></td>
                            <td><input type="radio" name="task4" value="no"></td>
                        </tr>
                        <tr>
                            <td>Does the kid have the ability to play with imagination?</td>
                            <td><input type="radio" name="task5" value="yes"></td>
                            <td><input type="radio" name="task5" value="no"></td>
                        </tr>

                        <tr>
                            <td>Can the child recall a short story?</td>
                            <td><input type="radio" name="task5" value="yes"></td>
                            <td><input type="radio" name="task5" value="no"></td>
                        </tr>

                        <tr>
                            <td>Can the child match similar objects?</td>
                            <td><input type="radio" name="task5" value="yes"></td>
                            <td><input type="radio" name="task5" value="no"></td>
                        </tr>

                        <tr>
                            <td>Can the child solve two- to three-piece basic puzzles?</td>
                            <td><input type="radio" name="task5" value="yes"></td>
                            <td><input type="radio" name="task5" value="no"></td>
                        </tr>

                        <tr>
                            <td>Can the child identify colors?</td>
                            <td><input type="radio" name="task5" value="yes"></td>
                            <td><input type="radio" name="task5" value="no"></td>
                        </tr>

                        <tr>
                            <td>Does the child show creativity in their drawings and coloring? </td>
                            <td><input type="radio" name="task5" value="yes"></td>
                            <td><input type="radio" name="task5" value="no"></td>
                        </tr>


                        <tr style="background-color: black;">
                        <th colspan="3" style="text-align: center; font-size: 17px;  color: white;">Language And Communication</th>
                    </tr>
                    
                    <tr>
                        <th>Behavior/Skills</th>
                        <th>Yes</th>
                        <th>No</th>
                    </tr>

                    <tr>
                        <td>Can the child say their name clearly?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child follow simple verbal instructions?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the kid use sentences of two to three words?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to ask basic questions?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to carry on simple conversations?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to verbally express feelings such as happiness, sadness, or anger?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to sing nursery rhymes or simple songs?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to communicate through gestures?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child's speech clear and understandable?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Does the child initiate conversations with others?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr style="background-color: black;">
                        <th colspan="3" style="text-align: center; font-size: 17px;  color: white;">Motor Skills</th>
                    </tr>
                    
                    <tr>
                        <th>Behavior/Skills</th>
                        <th>Yes</th>
                        <th>No</th>
                    </tr>

                    <tr>
                        <th>Gross Motor Skills</th>
                        <th></th>
                        <th></th>
                        
                    </tr>

                    <tr>
                        <td>Is the child able to use both feet to climb stairs?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child land securely after jumping with both feet? </td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child hit and catch a ball with a respectable amount of accuracy? </td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child sustain a few seconds of one-foot balance?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child run steadily?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <th>Fine Motor Skills</th>
                        <th></th>
                        <th></th>
                        
                    </tr>

                    <tr>
                        <td>Can the child draw simple shapes with a pencil or crayon?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to hold a tiny object in one hand?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child use a spoon and fork to feed themselves?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to turn a page of a book by itself?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child stack small objects (blocks or toys)?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr style="background-color: black;">
                        <th colspan="3" style="text-align: center; font-size: 17px;  color: white;">Social and Emotional Development</th>
                    </tr>
                    
                    <tr>
                        <th>Behavior/Skills</th>
                        <th>Yes</th>
                        <th>No</th>
                    </tr>

                    <tr>
                        <td>Can the child engage in cooperative play (e.g., playing a game with others)?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to control their feelings and handle pressure?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to regulate their impulses?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child identify and name their emotions?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child happily part ways with their parents or other caregivers?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child take turns during play?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>During group activities, is the child able to adhere to basic rules?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td> Is the child becoming more independent in daily activities</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Does the child treat other people with kindness and compassion?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the kid share materials or toys with other kids?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr style="background-color: black;">
                        <th colspan="3" style="text-align: center; font-size: 17px;  color: white;">Self-Help Skills</th>
                    </tr>
                    
                    <tr>
                        <th>Behavior/Skills</th>
                        <th>Yes</th>
                        <th>No</th>
                    </tr>

                    <tr>
                        <td>Does the child wash their hands after using the restroom and before and after meals?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Does the child take care of their belongings?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to eat on their own using a spoon and fork?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to wash their teeth without any help?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Does the child assist with maintaining a tidy and orderly personal space? </td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child dress and undress themselves with minimal assistance? </td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child ask for help when needed?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Is the child able to help clean up spills?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Can the child drink from a cup without spilling?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    <tr>
                        <td>Does the child help to keep their personal space clean and organized?</td>
                        <td><input type="radio" name="task5" value="yes"></td>
                        <td><input type="radio" name="task5" value="no"></td>
                    </tr>

                    </table>
                    <!-- Checklist Section End -->

                    <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>

                    <script>
                    // Function to display sweet alert when the form is submitted
                    function submitForm() {
                        // Show SweetAlert popup with custom design
                        Swal.fire({
                            icon: 'success',
                            title: 'Hooray!',
                            text: 'Your form has been submitted successfully!',
                            showConfirmButton: true,
                            confirmButtonText: 'Great!',
                            background: '#fef4e8',  
                            confirmButtonColor: '#fbb034',  
                            padding: '2rem',
                            timer: 3000,  
                            customClass: {
                                popup: 'swal2-popup',
                                title: 'swal2-title',
                                icon: 'swal2-icon',
                                confirmButton: 'swal2-confirm'
                            }
                        });
                    }
                    </script>
                    
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</body>
</html>
