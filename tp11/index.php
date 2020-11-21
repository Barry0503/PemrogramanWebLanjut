<?php 

      include_once "config2.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="nav1.jpg">
	<title>Test saja</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="style5.css">
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
    
</head>
<body>
<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Header</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
 
  <div class="container">
  
  <?php if(isset($_GET['status'])): ?>
        <div align="center">
    <div class="alert alert-warning" style="width: 490px;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php
           if ($_GET['status'] == 'sukses'){
            echo "User's Data Has Been Altered Successfully";
        }else if ($_GET['status'] == 'gagal'){
                echo "Sorry There Is An Error User's Data Can't Be Altered";
            }else if ($_GET['status'] == 'success'){
                echo "User's Data Has Been Deleted Successfully";
            }else{
                echo "There's An Error, User's Data Can't Be Deleted";
              }
        ?>
    </div>
    </div>
    <?php endif; ?>    
      <div class="row">
        <div class="col-md-12">
        <table id="listtable" class="table table-striped">
        <thead>
      <tr>
      
      <th>Id</th>
              <th>Username</th>
              <th>Email</th>
            
              <th>Name</th>
              <th>Picture</th>
              <th>Date</th>
              <th>Action</th>
              
              
              
      </tr>
    </thead>
    <tbody>
    <?php
        $query = "SELECT * FROM user";
        $dewan1 = mysqli_query($db1,$query);
        while ($row = mysqli_fetch_assoc($dewan1)){
            ?>
        <tr>
        <td>
            <?php echo $row['id']; ?>
            </td>
        <td>
            <?php echo $row['username']; ?>
            </td>
            <td>
            <?php
            echo $row['email']; ?>
            </td>
           
            <td>
            <?php
            echo $row['namee']; ?>
            </td>
            <td>
            <img src="../TugasWebPortofolio/img/<?php echo $row['photo']; ?>" width="130px" height="150px">
            </td>
            <td>
            <?php echo $row['date']; ?>
            </td>
           
              <td>
              <a href="edit5.php?id=<?php echo $row["id"] ?>" class="btn btn-info"> <i class="fa fa-edit"></i></a>
                <a href="delete1.php?id=<?php echo $row["id"] ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
              </td>
             
            </tr>
    <?php 
      }
    ?>
    </tbody>
        </table>
        </div>
      </div>
    </div>
    </div>
    <br>

<br><br><br>
<br><br>
</body>
</html>


  
 
</body>
</html>