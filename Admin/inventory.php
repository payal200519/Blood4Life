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
  

  .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h1 {
            color: #d9534f;
            font-size: 24px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #d9534f;
            color: white;
            font-size: 16px;
        }
        .action-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        button {
            background:rgb(255, 255, 255);
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }
        button:hover {
            background: #4cae4c;
            transform: scale(1.1);
        }
        button:disabled {
            background: #ccc;
            cursor: not-allowed;
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

          <h1 class="page-title"></h1>

        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="container">
        <h1>Blood Inventory</h1>
        <table>
            <thead>
                <tr>
                    <th>Blood Type</th>
                    <th>Units Available</th>
                    <th>Actions</th>
                    <th>Last Updated</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody id="inventory">
                <tr>
                    <td>A+</td>
                    <td class="units">10</td>
                    <td>
                        <div class="action-container">
                            <button onclick="updateStock(this, 1)">+</button>
                            <button onclick="updateStock(this, -1)">-</button>
                        </div>
                    </td>
                    <td class="last-updated">Never</td>
                    <td>City Hospital</td>
                </tr>
                <tr>
                    <td>O+</td>
                    <td class="units">15</td>
                    <td>
                        <div class="action-container">
                            <button onclick="updateStock(this, 1)">+</button>
                            <button onclick="updateStock(this, -1)">-</button>
                        </div>
                    </td>
                    <td class="last-updated">Never</td>
                    <td>Red Cross Center</td>
                </tr>
                <tr>
                    <td>AB+</td>
                    <td class="units">4</td>
                    <td>
                        <div class="action-container">
                            <button onclick="updateStock(this, 1)">+</button>
                            <button onclick="updateStock(this, -1)">-</button>
                        </div>
                    </td>
                    <td class="last-updated">Never</td>
                    <td>Krishana hospital</td>
                </tr>
                <tr>
                    <td>B+</td>
                    <td class="units">8</td>
                    <td>
                        <div class="action-container">
                            <button onclick="updateStock(this, 1)">+</button>
                            <button onclick="updateStock(this, -1)">-</button>
                        </div>
                    </td>
                    <td class="last-updated">Never</td>
                    <td>Health Clinic</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        function updateStock(button, change) {
            let row = button.closest("tr");
            let unitCell = row.querySelector(".units");
            let lastUpdatedCell = row.querySelector(".last-updated");
            let currentUnits = parseInt(unitCell.innerText);
            let newUnits = currentUnits + change;
            
            if (newUnits >= 0) {
                unitCell.innerText = newUnits;
                if (newUnits < 5) {
                    unitCell.style.color = "red";
                    unitCell.style.fontWeight = "bold";
                } else {
                    unitCell.style.color = "black";
                    unitCell.style.fontWeight = "normal";
                }
                let now = new Date();
                lastUpdatedCell.innerText = now.toLocaleString();
            }
        }
    </script>