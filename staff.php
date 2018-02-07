<html>
    <head>
        <meta charset="UTF-8">
        <title>Shere Bangla Degree College Shikerpur</title>
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" type="text/css" href="assets/animate.css" />
<link rel="stylesheet" type="text/css" href="assets/demo.css" />
<link rel="stylesheet" type="text/css" href="assets/menu.css" />
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" /> 
    </head>
    <body>
        <?php
        include './menu.php';
        ?>
        <div class="staf_div">
            
          <?php
                    include_once './Class/Database_class.php';
                    $database_object = new Database_class(); //passing Prev_question database
           
                    $result = $database_object->select_all_teachers_info(); //passing table name

                       while ( $row=  mysql_fetch_assoc($result)) {
                    ?>
            <div class="staf_info_div"  >
                <div class="pic">
                   <img src="data:upload/jpeg;base64,<?php echo base64_encode( $row['pic'] ); ?>" height="200px" width="200px" />
                    
                </div>
                <div class="staf_details">
                                    <?php 
                                        echo "NAME:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;". $row['name']."<br>";
                                        echo "DESIGNATION:&emsp;&emsp;". $row['designation']."<br>";
                                        echo "DEPERTMENT:&emsp;&emsp;". $row['depertment']."<br>";
                                        echo "PHONE:&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;". $row['phone']."<br>";
                                        echo "EMAIL:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;". $row['email']."<br>";
                                    ?>
                    </div>
            </div>
                       <?php  }
                         $result = $database_object->select_all_assistance_info(); //passing table name

                       while ( $row=  mysql_fetch_assoc($result)) {
                       
                       ?>
               <div class="staf_info_div"  >
                <div class="pic">
                   <img src="data:upload/jpeg;base64,<?php echo base64_encode( $row['pic'] ); ?>" height="200px" width="200px" />
                    
                </div>
                <div class="staf_details">
                                    <?php 
                                        echo "NAME:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;". $row['name']."<br>";
                                        echo "DESIGNATION:&emsp;&emsp;". $row['designation']."<br>";
                                        echo "DEPERTMENT:&emsp;&emsp;". $row['depertment']."<br>";
                                        echo "PHONE:&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;". $row['phone']."<br>";
                                        echo "EMAIL:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;". $row['email']."<br>";
                                    ?>
                    </div>
            </div>
                       <?php }?>
       
        </div>
             
      <?php
        include './footer.php';
        ?>
  
        </div>
    </body>
</html>
