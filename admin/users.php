<?php 
    require_once('head_html.php'); 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php'); 
    require_once('../Includes/admin.php');
    if ($logged==false) {
         header("Location:../index.php");
    } 
?>

<body>

    <div id="wrapper">
    
        <?php 
            require_once("nav.php");
            require_once("sidebar.php");
        ?>

        <div id="page-content-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            USERS
                            <small>Details</small>
                        
                        </h1>
                        <ol class="breadcrumb">
                          <li>User</li>
                          <li class="active">Details</li>
                        </ol>
                        <div class="table-responsive" style="padding-top: 0">
                                <table class="table table-hover table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>User No.</th>
                                            <th>User Name</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NO</th>
                                            <th>ADDRESS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                                            $id=$_SESSION['aid'];
                                            $query1 = "SELECT COUNT(*) FROM user";
                                            $result1 = mysqli_query($con,$query1);
                                            $row1 = mysqli_fetch_row($result1);
                                            $numrows = $row1[0];
                                            include("paging1.php");
                                            $result = retrieve_users_detail($_SESSION['aid'],$offset, $rowsperpage);

                                            while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                                <tr>
                                                    <td height="50"><?php echo $row['id'] ?></td>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['phone'] ?></td>
                                                    <td><?php echo $row['address'] ?></td>                                                    
                                                </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                                <?php include("paging2.php");  ?>
                        </div>
                 
                        
                    </div>

                </div>

            </div>

        </div>
 

    </div>

<?php 
    require_once("js.php");
?>

</body>

</html>
