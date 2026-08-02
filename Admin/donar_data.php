<htm>

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

          <h1 class="page-title">Donar list</h1>
          <form action="donar_data.php" method="POST">
    <input type="submit" name="select" value="select">
    </form>

       
        <?php 
           $servername="localhost";
           $username="root";
           $password="";
           $database="project";
      
           $conn = mysqli_connect($servername,$username,$password,$database);
           if($_SERVER['REQUEST_METHOD']=='POST')

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'] ?? '';
        $phoneno=$_POST['phoneno'] ?? '';
        $email=$_POST['email'] ?? '';
        $age=$_POST['age'] ?? '';
        $gender=$_POST['gender'] ?? '';
        $bloodgroup=$_POST['bloodgroup'] ?? '';
        $address=$_POST['address'] ?? '';
        
     }
     if(isset($_POST['select']))
     {
        $sql="SELECT * FROM `donar1`";
        $result=mysqli_query($conn,$sql);
        $n=mysqli_num_rows($result);
        if($n>0)
        {
            $row=mysqli_fetch_assoc($result);
            echo "<table border=1>
            <tr>
            <th> Donor Name</th>
            <th>Donor PhoneNO</th>
            <th>Donor Email</th>
            <th>Donor Age</th>
            <th>Donor Gender</th>
            <th>Donor Bloodgroup</th>
            <th>Donor Address</th>
            </tr>";

            while($row = mysqli_fetch_assoc($result))
            {
                echo "
                <tr>
                <td>$row[name]</td>
                <td>$row[phoneno]</td>
                <td>$row[email]</td>
                <td>$row[age]</td>
                <td>$row[gender]</td>
                <td>$row[bloodgroup]</td>
                <td>$row[address]</td>
                ";
            }
        }
     }
 ?>
  </div>
        </div>
        </div>
        </div>
        </div>
 </html>
 
