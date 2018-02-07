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
                    <form class="database1"  action="find_result.php" method="post">
                        
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td height="35px">Academic Year : </td>
                                <td height="35px">
                                <select name="year" style="width:200px; height: 30px;">
                                    <option value="">Select Year.... </option>
	<option value="13">2013-2014</option>
	<option value="14">2014-2015</option>
	<option value="15">2015-2016</option>
                                </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="35px">Class : </td>
                                <td height="35px">
                                <select name="class" style="width:200px; height: 30px;">
	<option value="">Select Class.... </option>
	<option value="1">HSC--1st</option>
	<option value="2">HSC--2nd</option>
	<option value="3">Degree--1st</option>
	<option value="4">Degree--2nd</option>
	<option value="5">Degree--3rd</option>
                                </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="35px">Group : </td>
                                <td height="35px">
                                <select name="group_name" style="width:200px; height: 30px;">
	<option value="">Select Group.... </option>
	<option value="1">Science</option>
	<option value="2">Business Studies</option>
	<option value="3">Humanities</option>
	<option value="4">BA</option>
	<option value="5">BBS</option>
	<option value="6">BSS</option>
	<option value="7">BSC</option>
                                </select>
                                </td>
                            </tr>
                            
                             <tr>
                                <td height="35px">Exam : </td>
                                <td height="35px">
                                <select name="exam" style="width:200px; height: 30px;">
	<option value="">Select Exam.... </option>
	<option value="31">Terminal</option>
	<option value="32">Half-Yearly</option>
	<option value="33">Annual</option>
	<option value="34">Pre-Test</option>
	<option value="test">Test</option>
                                </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td height="35px">Roll : </td>
                                <td height="35px"><input type="text" name="roll" style="width:200px; height: 30px;"></td>
                            </tr>
                            
                             <tr>
                                <td height="35px"> </td>
                                <td height="35px" >
                                   <input type="submit" name="submit" value="Find result" style="width:200px; height: 30px;">
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    </form>
                    
                    
                </div>
                
            </div>
           
            
        </div>
         


         
      <?php
        include './footer.php';
        ?>
  
    </body>
</html>
