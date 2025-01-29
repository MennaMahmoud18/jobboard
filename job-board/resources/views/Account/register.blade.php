<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
      
        .fade-in {
            opacity: 0;
            transform: translateY(-30px);
            animation: fadeIn ease-out 0.8s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        
        .card-custom {
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
            transform: translateY(10px);
        }

        .card-custom:hover {
            transform: translateY(0px);
            box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.25);
        }

        .form-control {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s;
        }

        .form-control:focus {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(45, 112, 133, 0.5);
        }

        .btn-custom {
            background: #2D7085;
            color: white;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s;
        }

        .btn-custom:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(45, 112, 133, 0.7);
        }

        .card-header {
            background: #2D7085;
            color: white; 
            text-align: center; 
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-custom mt-5 fade-in"> 
                <div class="card-header">
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('Account.registers.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <!-- Role Selection -->
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select id="role" class="form-control" name="role" required>
                                <option value="">Select Role</option>
                                <option value="Admin">Admin</option>
                                <option value="employee">Employer</option>
                                <option value="Candidate">Candidate</option>
                            </select>
                        </div>

                        <!-- Gender Selection -->
                        <div class="form-group">
                            <label>Gender</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input id="phone_number" type="text" class="form-control" name="phone_number" required>
                        </div>

                        <div class="form-group">
                            <label for="Age">Age</label>
                            <input id="Age" type="number" class="form-control" name="Age" required>
                        </div>

                        <div class="form-group">
                            <label for="profile_image">Upload Profile Picture</label>
                            <input type="file" class="form-control-file" id="profile_image" name="profile_image">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-custom btn-block">
                                Register
                            </button>
                        </div>

                        <div class="text-center mt-3">
                            <p>Already have an account? <a href="{{ route('Account.logins.submit') }}">Login here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
