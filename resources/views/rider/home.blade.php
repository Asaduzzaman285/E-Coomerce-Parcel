<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rider Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            transition: all 0.3s;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            margin: 5px 0;
        }
        .sidebar a:hover {
            background-color: #495057;
            border-radius: 4px;
        }
        .sidebar .logout-btn {
            color: #ff4d4d;  /* Highlight color for logout */
            font-weight: bold;
            border: 2px solid #ff4d4d;
            border-radius: 4px;
        }
        .sidebar .logout-btn:hover {
            background-color: #ff4d4d;
            color: white;
            text-decoration: none;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 15px;
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 20px;
        }
        .card-title {
            font-weight: bold;
        }
        .card-body {
            padding: 20px;
        }
        .btn-primary {
            padding: 10px 20px;
            font-size: 16px;
        }
        .text-danger, .text-primary {
            text-decoration: none;
        }
        .text-danger:hover, .text-primary:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column-md flex-column-sm">
        <!-- Sidebar -->
        <div class="sidebar">
            <h4 class="text-center text-white fs-3 fw-600">Rider Dashboard</h4>
            <a href="#profile">Profile</a>
            <a href="#mytrips">My Trips</a>
            <a href="#earnings">Earnings</a>
            <a href="#messages">Messages</a>
            <a href="#settings">Settings</a>

            <!-- Logout Button -->

                <ul >
                    <li>

                            <x-app-layout>

                             </x-app-layout>
                        </li>

                 </ul>

        </div>

        <!-- Main Content -->
        <div class="main-content w-100">
            <!-- Header -->
            <div class="header d-flex justify-content-between align-items-center">
                <h5>Welcome, {{ Auth::user()->name }}!</h5>
                <button class="btn btn-primary">Start New Trip</button>
            </div>

            <!-- Dashboard Content -->
            <div class="container mt-4">
                <div class="row">
                    <!-- Stats Cards -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Total Trips</h5>
                                <p class="card-text">42</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Active Trips</h5>
                                <p class="card-text">5</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Earnings</h5>
                                <p class="card-text">$1200</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- More Stats or Sections -->
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Messages</h5>
                                <p class="card-text">You have 3 new messages.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Upcoming Trips</h5>
                                <p class="card-text">2 upcoming trips scheduled.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
