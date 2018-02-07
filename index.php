<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shere Bangla Degree College Shikerpur</title>
         <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" type="text/css" href="assets/animate.css" />
<link rel="stylesheet" type="text/css" href="assets/demo.css" />
<link rel="stylesheet" type="text/css" href="assets/menu.css" />
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" /> 

<SCRIPT LANGUAGE="JavaScript">



<!-- Begin
function GetCookie (name) {
var arg = name + "=";
var alen = arg.length;
var clen = document.cookie.length;
var i = 0;
while (i < clen) {
var j = i + alen;
if (document.cookie.substring(i, j) == arg)
return getCookieVal (j);
i = document.cookie.indexOf(" ", i) + 1;
if (i == 0) break;
}
return null;
}
function SetCookie (name, value) {
var argv = SetCookie.arguments;
var argc = SetCookie.arguments.length;
var expires = (argc > 2) ? argv[2] : null;
var path = (argc > 3) ? argv[3] : null;
var domain = (argc > 4) ? argv[4] : null;
var secure = (argc > 5) ? argv[5] : false;
document.cookie = name + "=" + escape (value) +
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
((path == null) ? "" : ("; path=" + path)) +
((domain == null) ? "" : ("; domain=" + domain)) +
((secure == true) ? "; secure" : "");
}
function DeleteCookie (name) {
var exp = new Date();
exp.setTime (exp.getTime() - 1);
var cval = GetCookie (name);
document.cookie = name + "=" + cval + "; expires=" + exp.toGMTString();
}
var expDays = 30;
var exp = new Date();
exp.setTime(exp.getTime() + (expDays*24*60*60*1000));
function amt(){
var count = GetCookie('count')
if(count == null) {
SetCookie('count','1')
return 1
}
else {
var newcount = parseInt(count) + 1;
DeleteCookie('count')
SetCookie('count',newcount,exp)
return count
   }
}
function getCookieVal(offset) {
var endstr = document.cookie.indexOf (";", offset);
if (endstr == -1)
endstr = document.cookie.length;
return unescape(document.cookie.substring(offset, endstr));
}
// End -->
</SCRIPT>
    </head>
    <body>
        <?php
        include './menu.php';
        ?>
   
        <div class="slide">
           <div class="flow">
           <MARQUEE behavior="alternate" direction="left" style="width: 80%;">
               <img src="image/019.JPG">
               <img src="image/027.JPG">
               <img src="image/019.JPG">
               <img src="image/027.JPG">
        </MARQUEE>
           </div>
        </div>
        
          <?php
                    include_once './Class/Database_class.php';
                    $database_object = new Database_class(); //passing Prev_question database
           
                    $result = $database_object->select_all_hot_news_info(); //passing table name

                  
                    ?>
        
        <div class="Hot_news">
            <marquee height="100%"  onmouseover="this.stop();" onmouseout="this.start();" >
                
               <?php
                      while ( $row=  mysql_fetch_assoc($result)) {
                      echo $row['news'].'&emsp;&emsp;&emsp;&emsp;';
                    }
                          
                    ?>
            </marquee>
        </div>
        
        
        <?php
        
         $result = $database_object->select_all_chairman_info(); //passing table name
           $row=  mysql_fetch_array($result);
        ?>
        <div class="contain">
            <div class="chairman">
                <p>Chairman's Message</p>
                <hr>
                
                <div class="chairman_principal_image">
                    <img src="data:upload/jpeg;base64,<?php echo base64_encode( $row['image'] ); ?>" height="100px" width="100px" />
                 </div>
                
                <p><?php echo  $row['message']; ?></p>
                <form action="principal.php" method="get">
                    <p><a  href="principal_full.php?id=0">Read more &raquo;</a></p>
                </form>
  
            </div>
            <?php
            
             $result = $database_object->select_all_principal_info(); //passing table name
           $row=  mysql_fetch_array($result);
           ?>
            <div class="principal">
                <p>Principal's Corner </p>
                <hr>
                 <div class="chairman_principal_image">
                     <img src="data:upload/jpeg;base64,<?php echo base64_encode( $row['image'] ); ?>" height="100px" width="100px" />
                </div>
                 <p>  <p><?php echo  $row['message']; ?></p> 
                 <form action="principal_full.php" method="get">
                      <p><a href="principal_full.php?id=1">Read more &raquo;</a></p>
                  </form>
            </div>
            
            <div class="notice_board">
                <p>Notice Board</p>
                <hr>
                <?php 
               $result=  $database_object->select_all_notice_board_info();
                
                ?>
                <marquee height="80%" behavior="scroll"  direction="up"  onmouseover="this.stop();" onmouseout="this.start();" >
                <ul class="notice">
                    <?php
                     while ($row = mysql_fetch_assoc($result)) {
                    
                    ?>
                    <li> <a href="#"><?php echo   $row['headline'] ;?></a> </li>
		  <?php }?>
                                
	 </ul>
                    
                </marquee>
            </div>
        </div>
        
        <div class="extra">
            <div class="Useful_links">
                Useful Links
                <hr>
                <ul class="links">
		 	<li> <a href="#">1. Barisal Board</a> </li>
		 	
		 	<li> <a href="#">3. NU.edu.bd</a> </li>
		 	<li> <a href="#">4. nu.edu.bd/admissions</a> </li>
		 	<li> <a href="#">4. educationalboardrsults.gov.bd</a> </li>
		 	<li> <a href="#">4. dshe.gov.bd</a> </li>
		 	<li> <a href="#">4. moedu.gov.bd</a> </li>
		 	<li> <a href="#">4. dainikshikha.com</a> </li>
		 	<li> <a href="#">4. xiclassadmissions.gov.bd</a> </li>
				
			</ul>
            </div>
            
            <div class="visitor">
                <div class="visit">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                Today Visit :
                                <hr>
                            </td>
                            <td style="padding: 5px;">
                           <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
document.write(" <b>" + amt() + "</b>");
// End -->
                           </SCRIPT>
                           <hr>
                            </td>
                           
                        </tr>
                        
                        <tr>
                            <td>
                                Last week Visited :
                                <hr>
                            </td>
                            <td style="padding: 5px;">
                           <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
document.write(" <b>" + amt() + "</b>");
// End -->
                           </SCRIPT>
                           <hr>
                            </td>
                           
                        </tr>
                        
                        <tr>
                            <td>
                                Last month Visited :
                                <hr>
                            </td>
                            <td style="padding: 5px;">
                           <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
document.write(" <b>" + amt() + "</b>");
// End -->
                           </SCRIPT>
                           <hr>
                            </td>
                           
                        </tr>
                        
                        <tr>
                            <td>
                                Yearly Visited :
                                <hr>
                            </td>
                            <td style="padding: 5px;">
                           <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
document.write(" <b>" + amt() + "</b>");
// End -->
                           </SCRIPT>
                           <hr>
                            </td>
                           
                        </tr>
                        
                    </tbody>
                </table>
                </div>
            </div>
            <div class="image">
                <div class="ima">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    <img src="image/030.JPG">
                    
                    
            
                </div>
            </div>
        </div>
        
        
        <?php
        include './footer.php';
        ?>
  
        <?php
        // put your code here
        ?>
    </body>
</html>
