<?php
include_once "Connect.php";

$querys = "SELECT * FROM donor NATURAL JOIN login  ORDER BY blood_group DESC";
$query_run = mysqli_query($con,$querys);
if (mysqli_num_rows ($query_run)> 0) {
   while ($result = $query_run -> fetch_assoc()) {
      $fname = $result['fname'];
      $lname = $result['lname'];
      $age = $result['age'];
      $Available=$result['state'];
      $Gender=$result['sex'];
      $Blood_G=$result['blood_group'];
      $Phone=$result['phone'];
      $City=$result['city'];
      $email=$result['email'];
   }}
else{
   echo "No resutls";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Donor</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css">

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/dfe881f618.js"></script>


</head>
<body>
<div class="container">
                <div id="doner-info">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center text-danger text-uppercase">Donor List</h3><br>
                            
                            <form action="filter.php" method="post">
                            <div class="input-group mb-3">
                            <select id="inputState" class="form-control" name="city">
                              <option selected>Select area</option>
                              <option>Dhaka</option>
                              <option>Khulna</option>
                              <option>Sylhet</option>
                              <option>Chittagong</option>
                              <option>Rajshahi</option>
                              <option>Barisal</option>
                              <option>Rangpur</option>
                            </select>
                             </div>
                             <div class="input-group mb-3">
                            <select id="inputState" class="form-control" name="Blood_Group" >
                              <option selected>Select Blood Group</option>
                              <option>A+</option>
                              <option>A-</option>
                              <option>B+</option>
                              <option>B-</option>
                              <option>O+</option>
                              <option>O-</option>
                              <option>AB+</option>
                              <option>AB-</option>
                            </select>
                             </div>
                             
                            <button type="submit" name="search" class="btn btn-danger" value="Search">Submit</button>
                            </form>

                            <table class="table table-hover table-responsive-md text-center">
                            <thead style="color:#ffffff;">
                                    <tr class="bg-danger">
                                        <th scope="col">SL.NO.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Availability</th>
                                        <th cope="col">Age </th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Blood Group</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Phone#</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sl_no=1;
                                    foreach($query_run as $result){?>
                                    <td style="width:100px;"><?php echo $sl_no;?></td>
                                    <td style="width:600px;"><?php echo $result['fname'].' '.$result['lname'];?></td>
                                    <td style="width:300px;"><?php echo $result['state'];?></td>
                                    <td style="width:200px;"><?php echo $result['age'];?></td>
                                    <td style="width:400px;"><?php echo $result['sex'];?></td>
                                    <td style="width:200px;"><?php echo $result['blood_group'];?></td>
                                    <td style="width:400px;"><?php echo $result['city'];?></td>
                                    <td style="width:600px;"><?php echo $result['phone'];?></td>
                                    <td style="width:500px;"><?php echo $result['email'];?></td>
                                    </tr>
                                    <?php $sl_no++;};?>
                                </tbody>

                                </table>
        <div>
            <button id="Back" type="button" class="btn btn-danger"><a href="index.html" style="color:#eeeee;"><strong>BACK</strong></a></button>
        </div>

</div>
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <h5 class="text-uppercase text-center">Blood Doner</h5>
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="http://prantoamt.pythonanywhere.com"> Blood Doner.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->








    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>


</body>

</html>