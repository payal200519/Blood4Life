<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #d9534f;
        }
        .navbar-brand {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .navbar-brand:hover {
            color: #f1f1f1;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .content {
            padding: 20px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
        }
        .card-title {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-0">
                <h5 class="text-center py-3">Menu</h5>
                <a href="#" onclick="showSection('dashboard')">Dashboard</a>
                <a href="#" onclick="showSection('manage donors')">Manage Donors</a>
                <a href="#" onclick="showSection('Blood requests')">Blood Requests</a>
                <a href="#" onclick="showSection('inventory')">Blood Inventory</a>
                <a href="#" onclick="showSection('reports')">Reports</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 content">
                <!-- Dashboard -->
                <div id="dashboard" class="section">
                    <h2>Dashboard</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total Donors</h5>
                                    <p class="card-text" id="total-donors">120</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Pending Requests</h5>
                                    <p class="card-text" id="pending-requests">15</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Available Units</h5>
                                    <p class="card-text" id="available-units">320</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Manage Donors -->
                <div id="donors" class="section" style="display: none;">
                    <h2>Manage Donors</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Blood Group</th>
                                <th>Contact</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="donor-table">
                            <!-- Dynamic rows will be added here -->
                        </tbody>
                    </table>
                </div>

                <!-- Blood Requests -->
                <div id="requests" class="section" style="display: none;">
                    <h2>Blood Requests</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Requestor Name</th>
                                <th>Blood Group</th>
                                <th>Units</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="request-table">
                            <!-- Dynamic rows will be added here -->
                        </tbody>
                    </table>
                </div>

                <!-- Blood Inventory -->
                <div id="inventory" class="section" style="display: none;">
                    <h2>Blood Inventory</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Blood Group</th>
                                <th>Available Units</th>
                            </tr>
                        </thead>
                        <tbody id="inventory-table">
                            <!-- Dynamic rows will be added here -->
                        </tbody>
                    </table>
                </div>

                <!-- Reports -->
                <div id="reports" class="section" style="display: none;">
                    <h2>Reports</h2>
                    <p>Generate detailed analytics and reports.</p>
                    <button class="btn btn-danger">Generate Report</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => section.style.display = 'none');
            document.getElementById(sectionId).style.display = 'block';
        }

        // Placeholder: Populate dynamic data
        document.getElementById('donor-table').innerHTML = `
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>O+</td>
                <td>123-456-7890</td>
                <td><button class='btn btn-warning btn-sm'>Edit</button> <button class='btn btn-danger btn-sm'>Delete</button></td>
            </tr>
        `;
    </script>

</body>
</html>
