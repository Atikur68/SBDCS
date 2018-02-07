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
        <?php
                    include_once './Class/Database_class.php';
                    $database_object = new Database_class(); //passing Prev_question database
                  
                    ?>
         <?php
        
         $result = $database_object->select_all_principal_info(); //passing table name
           $row=  mysql_fetch_array($result);
        ?>
        <?php
          if($_GET["id"]==1){
?>
        <div class="principal_full">
            <p>Principal's Corner </p>
                <hr>
                 <div class="chairman_principal_image">
                     <img src="data:upload/jpeg;base64,<?php echo base64_encode( $row['image'] ); ?>" height="100px" width="100px" />
                </div>
                 <p>  <p><?php echo  $row['detail_message']; ?></p> 
            
        </div>
       <?php  }       
        else {?>
      <?php
        
         $result = $database_object->select_all_chairman_info(); //passing table name
           $row=  mysql_fetch_array($result);
        ?>
        <div class="chair_full">
           <p>Chairman's Message</p>
                <hr>
                <div class="chairman_principal_image">
                    <img src="data:upload/jpeg;base64,<?php echo base64_encode( $row['image'] ); ?>" height="100px" width="100px" />
                 </div>
                <p><?php echo  $row['detail_message']; ?></p>
        </div> 
       <?php }  ?>
       
       
        <?php
        include './footer.php';
        ?>
  
        </div>
    </body>
</html>
