<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merchant Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f5f7;
            margin: 0%;
            padding: 0%;
        }
        .sidebar {
            height: 100vh;
            background-color: #2c3e50;
            color: white;
            padding-top: 30px;
            width: 40%;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #34495e;
            border-left: 5px solid #3498db;
        }
        .sidebar .active {
            background-color: #2980b9;
        }
        .main-content {

            padding-top: 20px;
        }
        .header {
            background-color: #ffffff;
            padding: 20px;
            border-bottom: 1px solid #ecf0f1;
        }
        .header h5 {
            margin: 0;
            font-size: 1.25rem;
            color: #2c3e50;
        }
        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #2c3e50;
        }
        .card-text {
            font-size: 1rem;
            color: #7f8c8d;
        }
        .stats-card {
            background-color: #ecf0f1;
            border-radius: 10px;
            padding: 20px;
        }
        .stats-card .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .stats-card .card-body .number {
            font-size: 2rem;
            font-weight: bold;
            color: #2980b9;
        }
        .stats-card .card-body .icon {
            font-size: 2.5rem;
            color: #2980b9;
        }
        .logout-btn {
            color: #e74c3c;
            font-weight: bold;
        }
        .logout-btn:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="d-flex ms-auto ">
        <!-- Sidebar -->
        <div class="sidebar p-4">
            <h4 class="text-center text-white mb-4">Merchant Dashboard</h4>
            <a href="{{url('book_parcel')}}" class="active">Book Parcel</a>

                  {{-- <li class="nav-item"> <a class="nav-link" href="{{url('view_product')}}">Add Product</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('show_product')}}">Show Product</a></li> --}}



            <a href="#orders">My Orders</a>
            <a href="#orderTracking">Track Orders</a>
            <a href="#reports">Reports</a>
            <a href="#settings">Settings</a>
             <ul>
                <li>

                        <x-app-layout>

                         </x-app-layout>
                    </li>

             </ul>

        </div>

        <!-- Main Content -->
        <div class="main-content w-100 ">
            <!-- Header -->
            <div class="header d-flex justify-content-between align-items-center">
                <h5>Welcome, {{ Auth::user()->name }}!</h5>
                <button class="btn btn-primary">Book New Parcel</button>
            </div>

            <!-- Dashboard Content -->
            <div class="container mt-4">
                <div class="row">
                    <!-- Stats Cards -->
                    <div class="col-md-4 mb-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Total Orders</h5>
                                    <p class="card-text">120</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-box"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Pending Shipments</h5>
                                    <p class="card-text">15</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Completed Orders</h5>
                                    <p class="card-text">85</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & Icons -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
