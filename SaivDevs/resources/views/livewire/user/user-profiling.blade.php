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
   <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<!-- SweetAlert JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <style>
    
    body {
        font-family: 'Roboto', sans-serif;
    
    }
        .card-header {
            background-color: black;
            color: white;
            display: flex; 
            justify-content: center; 
            align-items: center; 
            align-items: flex-end;
            height: px;   
            

        }

        .card-title {
            font-size: 24px; /* Change this value to increase or decrease the size */
            font-weight: 700; /* Optional: Make the title bold */
            margin: 0; /* Reset margin to prevent shifting the layout */
        }

        .widget {
            margin-bottom: 1.5rem;
        }

        .card {
            width: 90%; /* Adjust the percentage or use a specific width like 500px */
            margin: 0 auto; /* Center the card horizontally */
        }

        .button-container {
    
            margin-top: -25px; /* Optional: Add some spacing above */
        }

        .content-wrapper {
            min-height: calc(100vh + 100px); /* or adjust this value */
            padding-bottom: 50px; /* To ensure extra space at the bottom */
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
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <form action="{{ route('profiling.submit') }}" method="POST" onsubmit="return validateForm(event)">
    @csrf

    <!-- Child Information Card -->
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Child Information</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter first name">
                <div class="alert alert-danger" id="firstNameError" style="display:none;"></div>
            </div>

            <div class="form-group">
                <label for="middleName">Middle Name</label>
                <input type="text" name="middleName" class="form-control" id="middleName" placeholder="Enter middle name">
                <div class="alert alert-danger" id="middleNameError" style="display:none;"></div>
            </div>

            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Enter last name">
                <div class="alert alert-danger" id="lastNameError" style="display:none;"></div>
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
        </div>
    </div>

    <!-- Family Information Card -->
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Family Information</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="firstMotherName">Mother's First Name</label>
                <input type="text" name="firstMotherName" class="form-control" id="firstMotherName" placeholder="Enter mother's first name">
                <div class="alert alert-danger" id="firstMotherNameError" style="display:none;"></div>
            </div>

            <div class="form-group">
                <label for="middleMotherName">Mother's Middle Name</label>
                <input type="text" name="middleMotherName" class="form-control" id="middleMotherName" placeholder="Enter mother's middle name">
                <div class="alert alert-danger" id="middleMotherNameError" style="display:none;"></div>
            </div>

            <div class="form-group">
                <label for="lastMotherName">Mother's Last Name</label>
                <input type="text" name="lastMotherName" class="form-control" id="lastMotherName" placeholder="Enter mother's last name">
                <div class="alert alert-danger" id="lastMotherNameError" style="display:none;"></div>
            </div>

            <div class="form-group">
                <label for="firstFatherName">Father's First Name</label>
                <input type="text" name="firstFatherName" class="form-control" id="firstFatherName" placeholder="Enter father's first name">
                <div class="alert alert-danger" id="firstFatherNameError" style="display:none;"></div>
            </div>

            <div class="form-group">
                <label for="middleFatherName">Father's Middle Name</label>
                <input type="text" name="middleFatherName" class="form-control" id="middleFatherName" placeholder="Enter father's middle name">
                <div class="alert alert-danger" id="middleFatherNameError" style="display:none;"></div>
            </div>

            <div class="form-group">
                <label for="lastFatherName">Father's Last Name</label>
                <input type="text" name="lastFatherName" class="form-control" id="lastFatherName" placeholder="Enter father's last name">
                <div class="alert alert-danger" id="lastFatherNameError" style="display:none;"></div>
            </div>

            <div class="form-group">
                <label for="contactInfo">Contact Information</label>
                <input type="text" name="contactInfo" class="form-control" id="contactInfo" placeholder="Enter phone number">
            </div>
            <div class="form-group">
                <label for="emergencyContact">Emergency Contact</label>
                <input type="text" name="emergencyContact" class="form-control" id="emergencyContact" placeholder="Enter phone number">
            </div>

            <div class="form-group">
                <label for="motherjob">Mother's Occupation</label>
                <input type="text" name="motherjob" class="form-control" id="motherjob" placeholder="Enter Mother Occupation ">
                <div class="alert alert-danger" id="motherjobError" style="display:none;"></div>
            </div>

            <div class="form-group">
                <label for="fatherjob">Father's Occupation</label>
                <input type="text" name="fatherjob" class="form-control" id="fatherjob" placeholder="Enter Father Occupation ">
                <div class="alert alert-danger" id="fatherjobError" style="display:none;"></div>
            </div>

        </div>
    </div>

    <!-- Development Information Card -->
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Development Information</h3>
        </div>
        <div class="card-body">
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
                <div class="alert alert-danger" id="healthConditionError" style="display:none;"></div>
            </div>
            <div class="form-group">
                <label for="specialNeeds">Does your child have any special needs or require additional support?</label>
                <select name="specialNeeds" class="form-control" id="specialNeeds">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>
    </div>
        <!-- Button Container -->
        <div style="display: flex; justify-content: flex-start; margin-top: 10px; margin-left: 53px; gap: 10px;">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn" style="background-color: red; color: white;">Update</button>
    </div>
</form>

<script>
function validateForm(event) {
    event.preventDefault(); // Prevent the default form submission

    const requiredFields = [
        { id: 'firstName', errorId: 'firstNameError' },
        { id: 'middleName', errorId: 'middleNameError' },
        { id: 'lastName', errorId: 'lastNameError' },
        { id: 'firstMotherName', errorId: 'firstMotherNameError' },
        { id: 'middleMotherName', errorId: 'middleMotherNameError' },
        { id: 'lastMotherName', errorId: 'lastMotherNameError' },
        { id: 'firstFatherName', errorId: 'firstFatherNameError' },
        { id: 'middleFatherName', errorId: 'middleFatherNameError' },
        { id: 'lastFatherName', errorId: 'lastFatherNameError' },
        { id: 'motherjob', errorId: 'motherjobError' },
        { id: 'fatherjob', errorId: 'fatherjobError' },
        { id: 'healthCondition', errorId: 'healthConditionError' },
    ];

    // Clear previous error messages
    requiredFields.forEach(({ errorId }) => {
        document.getElementById(errorId).innerText = '';
        document.getElementById(errorId).style.display = 'none';
    });

    let isValid = true;

    for (let { id, errorId } of requiredFields) {
        const value = document.getElementById(id).value.trim(); // Get the input value and trim whitespace
        // Check if the field is empty
        if (value === '') {
            document.getElementById(errorId).innerText = `${id.replace(/([A-Z])/g, ' $1')} is required.`;
            document.getElementById(errorId).style.display = 'block'; // Show error message
            isValid = false; // Prevent form submission
        } else if (/[^a-zA-Z\s]/.test(value)) {
            // Check for numbers or any non-letter characters
            document.getElementById(errorId).innerText = `${id.replace(/([A-Z])/g, ' $1')} must contain only letters and spaces.`;
            document.getElementById(errorId).style.display = 'block'; // Show error message
            isValid = false; // Prevent form submission
        }
    }

    if (isValid) {
        // SweetAlert for successful submission
        swal({
            title: "Success!",
            text: "Form submitted successfully!",
            icon: "success",
            button: "Okay",
        }).then(() => {
            document.forms[0].submit(); // Submit the form programmatically
        });
    }

    return false; // Prevent default submission
}
</script>


</body>
</html>
