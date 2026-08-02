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

  #btn{
    color: black;
  }
  .page-title{
    color: black;
  }
  table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            color: black;
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
            text-align: center;
        }
  </style>
  </head>
<?php
include 'db.php';
  include 'session.php';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
  ?>
< style="color:black">
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

          <h1 class="page-title">User Data</h1>
          <form action="hos1.php" method="POST">
            <input type="submit" name="select" value="select" id="btn">


        
        <?php 
        $servername='localhost';
        $username='root';
        $password='';
        $database='project';
 
        $con = mysqli_connect($servername,$username,$password,$database);
            
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname=$_POST['firstname'] ?? '';
            $lname=$_POST['lastname'] ?? '';
            $cno=$_POST['contactno'] ?? '';
            $email=$_POST['email'] ?? '';
            $gender=$_POST['gender'] ?? '';
            $age=$_POST['age'] ?? '';
            $state=$_POST['state'] ?? '';
            $city=$_POST['city'] ?? '';
            $password=$_POST['password'] ?? '';
            $cpassword=$_POST['confirmpassword'] ?? '';
         }
         if(isset($_POST['select']))
     {
        $sql="SELECT * FROM `register`";
        $result=mysqli_query($con,$sql);
        $n=mysqli_num_rows($result);
        if($n>0)
        {
            $row=mysqli_fetch_assoc($result);
            echo "<table border=1>
            <tr>
            <th>firstname</th>
            <th>lastname</th>
            <th>contactno</th>
            <th>email</th>
            <th>gender</th>
            <th>age</th>
            <th>state</th>
            <th>city</th>
            <th>password</th>
            <th>confirmpassword</th>
           </tr>";

            while($row = mysqli_fetch_assoc($result))
            {
                echo "
                <tr>
                <td>$row[firstname]</td>
                <td>$row[lastname]</td>
                <td>$row[contactno]</td>
                <td>$row[email]</td>
                <td>$row[gender]</td>
                <td>$row[age]</td>
                <td>$row[state]</td>
                <td>$row[city]</td>
                <td>$row[password]</td>
                <td>$row[confirmpassword]</td>
                ";
            }
        }
     }
        ?>
        </form>
</div>
        </div>
        </div>
        </div>
        </div>
        