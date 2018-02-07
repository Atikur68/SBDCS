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
        <div class="ved">
            
            
            
            <form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" id="upload" name="submit">
</form>
              <?php
                    include_once './Class/Database_class.php';
                    $database_object = new Database_class(); //passing Prev_question database
           
                    ?>
            
            <?php
            if(isset($_POST["submit"])) {
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file );
// Check if image file is a actual image or fake image
$fileName = $_FILES['fileToUpload']['name'];
  $fileType = $_FILES['fileToUpload']['type'];
  $query =  mysql_query("insert into new(name,type) values ('$fileName', '$fileType')");
    
  echo $fileName;
  echo $fileType;
  
}

?>
            
            
            
            
            <object data="image/Solutions_Chapters.pdf" type="application/pdf" width="100%" height="100%">
 
  <p>It appears you don't have a PDF plugin for this browser.
  No biggie... you can <a href="myfile.pdf">click here to
  download the PDF file.</a></p>
  
</object>
        </div>
             
        <?php
        include './footer.php';
        ?>
  
        </div>
    </body>
</html>
