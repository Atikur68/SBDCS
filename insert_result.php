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
        <div class="result_page">
            <div class="result">
                EXAM - RESULT
                <hr>
                <div class="main_result">
                    <form class="database1"  action="" method="post">
                        
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                           
                            <tr>
                                <td height="35px">Name : </td>
                                <td height="35px"><input type="text" name="name" style="width:200px; height: 30px;"></td>
                            </tr>
                            <tr>
                                <td height="35px">Class : </td>
                                <td height="35px">
                                <select name="class" style="width:200px; height: 30px;">
	<option value="">Select Class.... </option>
	<option value="HSC-1st">HSC--1st</option>
	<option value="HSC-2nd">HSC--2nd</option>
	<option value="Degree-1st">Degree--1st</option>
	<option value="Degree--2nd">Degree--2nd</option>
	<option value="Degree-3rd">Degree--3rd</option>
                                </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="35px">Group : </td>
                                <td height="35px">
                                <select name="group_name" style="width:200px; height: 30px;">
	<option value="">Select Group.... </option>
	<option value="Science">Science</option>
	<option value="Business Studies">Business Studies</option>
	<option value="Humanities">Humanities</option>
	<option value="BA">BA</option>
	<option value="BBS">BBS</option>
	<option value="BSS">BSS</option>
	<option value="BSC">BSC</option>
                                </select>
                                </td>
                            </tr>
                            
                             <tr>
                                <td height="35px">Exam : </td>
                                <td height="35px">
                                <select name="exam" style="width:200px; height: 30px;">
	<option value="">Select Exam.... </option>
	<option value="Terminal">Terminal</option>
	<option value="Half_Yearly">Half-Yearly</option>
	<option value="Annual">Annual</option>
	<option value="Pre_Test">Pre-Test</option>
	<option value="test">Test</option>
                                </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="35px">Roll : </td>
                                <td height="35px"><input type="text" name="roll" style="width:200px; height: 30px;"></td>
                            </tr>
                            <tr>
                                <td height="35px">Result : </td>
                                <td height="35px"><input type="text" name="result" style="width:200px; height: 30px;"></td>
                            </tr>
                            
                             <tr>
                                <td height="35px"> </td>
                                <td height="35px" >
                                   <input type="submit" name="submit" value="Insert result" style="width:200px; height: 30px;">
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    </form>
                    
                      <?php
              if(isset($_POST["submit"])) {
                  $name=$_POST['name'];
                  $class=$_POST['class'];
                  $group=$_POST['group_name'];
                  $roll=$_POST['roll'];
                  $result=$_POST['result'];
                  $exam=$_POST['exam'];
               
                  $add=$year.$class.$group.$roll;
                  
                   $connection=  mysql_connect("localhost","root","");
        $db= mysql_select_db("sbdcs",$connection);
       echo $name;
         $res=  mysql_query("insert into test(name,class,group,roll,result) values('$name','$class','$group','$exam','$roll','$result')");
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
