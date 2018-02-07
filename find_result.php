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
              if(isset($_POST["submit"])) {
                  $year=$_POST['year'];
                  $class=$_POST['class'];
                  $group=$_POST['group_name'];
                  $roll=$_POST['roll'];
                  $exam=$_POST['exam'];
               
                  $add=$year.$class.$group.$roll;
                  
                   $connection=  mysql_connect("localhost","root","");
        $db= mysql_select_db("sbdcs",$connection);
                  
              
            
               
        $sql=mysql_query("select * from $exam where roll=$add"); 
             while ($se= mysql_fetch_array($sql))
        {
            $stu_name=$se['name'];
            $stu_class=$se['class'];
            $stu_group=$se['group'];
            $stu_exam=$se['exam'];
            $stu_result=$se['result'];
        }
        
        if($stu_name==''|| $stu_class=='')
        {
            echo 'Pleade fill up properly';
        }
 else {
    
        ?>
        <div class="result_page">
            <div class="result">
                EXAM - RESULT
                <hr>
                <div class="main_result">
                    <form class="database1"  action="find_result.php" method="post">
                        
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td height="35px">Student Name : </td>
                                <td height="35px">
                                 <?php echo  $stu_name; ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="35px">Class : </td>
                                <td height="35px">
                                <?php echo  $stu_class; ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="35px">Group : </td>
                                <td height="35px">
                                <?php echo  $stu_group; ?>
                                </td>
                            </tr>
                            
                             <tr>
                                <td height="35px">Exam : </td>
                                <td height="35px">
                                <?php echo  $exam; ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="35px">Roll : </td>
                                <td height="35px">
                                    <?php echo  $roll; ?>
                                </td>
                            </tr>
                            
                             <tr>
                                <td height="35px">Result : </td>
                                <td height="35px">
                                     <?php echo  $stu_result; ?>
                                </td>
                            </tr>
                            
                             
                            
                        </tbody>
                    </table>
                    </form>
                </div>
                
            </div>
           
        </div>
       <?php 
              }
              }
              ?>
      <?php
        include './footer.php';
        ?>
  
    </body>
</html>
