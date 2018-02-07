<html>
    <head>
        <meta charset="UTF-8">
        <title>Shere Bangla Degree College Shikerpur</title>
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" type="text/css" href="assets/animate.css" />
<link rel="stylesheet" type="text/css" href="assets/demo.css" />
<link rel="stylesheet" type="text/css" href="assets/menu.css" />
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" /> 
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include './menu.php';
        ?>
        <?php
                    include_once './Class/Database_class.php';
                    $database_object = new Database_class(); //passing Prev_question database
        ?>
        <div class="containe">
        <div class="container">
<div class="panel-group" id="accordion">
<?php
               $result = $database_object->select_all_notice_info(); //passing table name
              $i=1;
           while ($row = mysql_fetch_assoc($result)) {
               
?>
        
    <div class="panel panel-default" style="width:1000px;margin: auto;">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i;?>"> <?php echo $row[name];?>. </a>
        </h4>
      </div>
      <div id="<?php echo $i;?>" class="panel-collapse collapse">
        <div class="panel-body">
            
             <object data="image/<?php echo $row['name'];?> " type="application/pdf" width="100%" height="100%">
 
  <p>It appears you don't have a PDF plugin for this browser.
  No biggie... you can <a href="myfile.pdf">click here to
  download the PDF file.</a></p>
  
</object>
            
          .</div>
      </div>
    </div>
   
 
     <?php
    
     $i++;    
     
     }
?>        
</div>
</div> 
        </div>
      <?php
        include './footer.php';
        ?>
  
       
    </body>
</html>
