<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Home</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS --> 
      <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      <style type="text/css">
         body{
         font-family: 'Poppins', sans-serif;
         background: #E4E9F7;
         }.container{
         background: white;
         padding: 20px;
         border-radius: 5px;
         margin-top:20px;
         }td p{
         display: none;
         }td textarea{
         resize: none;
         height: 20px;
         }.p{
          color:red;
          padding: 10px;
          border-radius: 3px;margin:20px;
          border:2px solid red;
         }
      </style>
      <script src="js.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">Tech With Onkar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="https://www.youtube.com/c/TechWithOnkar1/videos" target="_blank">Youtube</a>
                  </li>
               </ul>
               <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add New</button>
            </div>
         </div>
      </nav>
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title">Add New Record</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="add_a">
                 
               </div>
               <div class="modal-body">
                  <div class="mb-3">
                     <label  class="form-label">Full Name</label>
                     <input type="text" class="form-control" id="name" placeholder="Name">
                  </div>
                  <div class="mb-3">
                     <label  class="form-label">Email address</label>
                     <input type="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="mb-3">
                     <label  class="form-label">Phone</label>
                     <input type="number" class="form-control" id="phone" placeholder="Phone">
                  </div>
                  <div class="mb-3">
                     <label  class="form-label">Age</label>
                     <input type="number" class="form-control" id="age" placeholder="Age">
                  </div>
               </div>
               <!-- Modal footer -->
               <div class="modal-footer">
                  <button type="button" class="btn btn-success sub">Submit</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <h2>CRUD Operation using php & mysql</h2>
         <p>Subscribe tech with onkar on youtube</p>
         <div class="q">
           
         </div>
         <table class="table table-striped table-bordered">
            <thead>
               <tr>
                  <th>Sl.No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Age</th>
                  <th>Update</th>
                  <th>Delete</th>
               </tr>
            </thead>
           
            <tbody>
               <?php
                  $conn=new mysqli("localhost","root","","crud");
                  $sql="SELECT * FROM data";
                  $q=$conn->query($sql);
                  if($q->num_rows>0){
                    $w=1;
                    while($row=$q->fetch_assoc()){
                      $n=$row['name'];
                      $e=$row['email'];
                      $p=$row['phone'];
                      $a=$row['age'];
                      $id=$row['id'];
                      echo "
                     <tr>
                        <td class='t1'>".$w."</td>
                        <td class='t2'><textarea class='form-control'>".$n."</textarea></td>
                        <td class='t3'><textarea class='form-control'>".$e."</textarea></td>
                        <td class='t4'><textarea class='form-control'>".$p."</textarea></td>
                        <td class='t5'><textarea class='form-control'>".$a."</textarea></td>
                        <td><button class='btn btn-warning up' title=".$id.">Update</button></td>
                        <td><button class='btn btn-danger d' id='d' title=".$id.">Delete</button></td>
                       
                      </tr>
                      ";
                      $w++;
                    }
                  }else{
                    echo "<p class='p'>No data Found</p>";
                  }
                  
                  ?> 
            </tbody>
         </table>
      </div>
   </body>
</html>