<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

         
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: black;
}
.topnav span {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a {
  float: right;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
#institute {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#institute td,th {
    border: 1px solid #ddd;
    padding: 8px;
}

#institute tr:nth-child(even){background-color: #f2f2f2;}
#institute tr:nth-child(odd){background-color: #f2f2f2;}

#institute tr:hover {background-color: #ddd;}

#institute th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
.footer 
      {
       overflow: hidden;
       background-color: black;
       margin: 228px 0px 0px 0px;
       padding:30px 5px 32px 5px;
      }

      .developer
      {
       float: center;
       display: block;
       color: white;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
       font-size: 17px; 
      }
</style>


         
    </head>   
         
<body>
    
  <header>
   <div class="topnav">
    <span>RGI RMS</span>
    <a href="index.php" >Logout</a>
    <a href="adminmain.php">Admin</a>
    <a href="index.php">Home</a>
   </div>
  </header>
    <br/>
    <br/>
    <br/>
    <br/>
    <center>
    <table  id="institute" border="2">
<?php
 include('dbcon.php');
 if(isset($_POST['submit']))
    { 
      
 $dept= mysqli_real_escape_string($dbcon, $_POST['profilesearch']);
 
$sql = "SELECT * FROM teacher where department='$dept'";
$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
   
    echo "<tr>"."<th>"."Teacher Id" ."</th>"."<th>"."First Name" ."</th>"."<th>"."Last Name" ."</th>"."<th>"."Date of Birth" ."</th>"."<th>"."Gender" ."</th>"."<th>"."Department" ."</th>"."<th>"."Email" ."</th>"."<th>"."Contact" ."</th></tr>";    

    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr>"."<td>".$row['teacherid']."</td>"."<td>".$row["fname"]."</td>"."<td>".$row["lname"]."</td>"."<td>".$row["dob"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["department"]."</td>"."<td>".$row["username"]."</td>"."<td>".$row["contact"]."</td>"."</tr>";
       
       
          
    }  
}
    }
mysqli_close($dbcon);
?>
    </table>
    </center>
<footer> 
    <div class="footer">
     <div class="developer">
      @developed By - C2
     </div>
    </div>
   </footer>
</body>
</html>