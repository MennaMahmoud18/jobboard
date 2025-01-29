<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        
        .fade-in {
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn ease-out 0.8s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
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

       
        .forget-register {
            color: #2D7085;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        .forget-register:hover {
            color: #1B4F5B;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-custom mt-5 fade-in"> 
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('Account.logins.submit') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-custom btn-block">
                                Login
                            </button>
                        </div>

                        <div class="mt-4 text-center">
                            <p>Do not have an account? <a class="forget-register" href="{{ route('Account.registers.store') }}">Register</a></p>
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
