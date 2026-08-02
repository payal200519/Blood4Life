<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

#sidebar{position:relative;margin-top:-20px}
#content{position:relative;margin-left:210px}
@media screen and (max-width: 600px) {
  #content {
    position:relative;margin-left:auto;margin-right:auto;
  }
}
  #he{
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      padding: 3px 7px;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      align:center
  }
  

/* Main Container */
.container {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 90%;
    max-width: 800px;
    text-align: center;
}

/* Heading */
h1 {
    color: #d9534f;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
}

th {
    background-color: #d9534f;
    color: white;
    font-size: 18px;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Search & Filter Styling */
.filter-container {
    margin-bottom: 20px;
}

select, button {
    padding: 12px;
    margin: 5px;
    border-radius: 6px;
    border: 1px solid #ddd;
    font-size: 16px;
}

select {
    width: 200px;
}

/* Search Button */
button {
    background-color: #d9534f;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

button:hover {
    background-color: #c9302c;
    transform: scale(1.05);
}

/* Confirmation Tag */
.confirmed {
    color: green;
    font-weight: bold;
}

/* Responsive Design */
@media screen and (max-width: 600px) {
    .container {
        width: 100%;
        padding: 10px;
    }
    select, button {
        width: 100%;
        font-size: 14px;
    }
}

</style>
</head>
<?php
include 'db.php';
  include 'session.php';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
  ?>
<body style="color:black">
<div id="header">
<?php include 'header.php';
?>
</div>
<div id="sidebar">
<?php $active="list"; include 'sidebar.php'; ?>

</div>
<div id="content" >
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

          <h1 class="page-title">Blood Request</h1>

        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="container">
        <h1>Blood Requests</h1>
        <table>
            <thead>
                <tr>
                    <th>Blood Group</th>
                    <th>Hospital</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>Action</th>
                    <th>Request</th>
                </tr>
            </thead>
            <tbody id="requestsTableBody">
                <!-- Requests will be dynamically loaded here -->
            </tbody>
        </table>
    </div>    <script>
     // Load Requests from Local Storage
let bloodRequests = JSON.parse(localStorage.getItem('bloodRequests')) || [];

// Function to Load Blood Requests
function loadRequests() {
    const tableBody = document.getElementById('requestsTableBody');
    tableBody.innerHTML = "";

    if (bloodRequests.length === 0) {
        tableBody.innerHTML = '<tr><td colspan="6">No requests found</td></tr>';
    } else {
        bloodRequests.forEach((request, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${request.bloodGroup}</td>
                <td>${request.hospital}</td>
                <td>${request.area}</td>
                <td>${request.city}</td>
                <td class="status">${request.status || 'Pending'}</td>
                <td>
                    <button class="confirm-btn" onclick="confirmRequest(${index})">Confirm</button>
                    <button class="delete-btn" onclick="deleteRequest(${index})">Delete</button>
                </td>
            `;
            tableBody.appendChild(row);
        });
    }
}

// Function to Confirm Request
function confirmRequest(index) {
    bloodRequests[index].status = "Confirmed";
    localStorage.setItem('bloodRequests', JSON.stringify(bloodRequests)); // Update local storage
    loadRequests(); // Reload table
}

// Function to Delete Request
function deleteRequest(index) {
    bloodRequests.splice(index, 1); // Remove request from array
    localStorage.setItem('bloodRequests', JSON.stringify(bloodRequests)); // Update local storage
    loadRequests(); // Reload table
}

// Load Requests on Page Load
document.addEventListener('DOMContentLoaded', loadRequests);

        
    </script>