<style>
.cancelbtn {
  background-color: #98DEFF;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 10%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.cancelbtn:hover {
    background: linear-gradient(to right, #98DEFF ,#00ADFE);
}

.signupbtn {
  background-color: #98DEFF;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 10%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.signupbtn:hover {
    background: linear-gradient(to right, #98DEFF ,#00ADFE);
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
</style>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LMS COURSE</title> 
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index_admin.html"><b>LMS</b>COURSE</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                </li>
				                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                   
                    <!-- /.dropdown-tasks -->
                </li>
     
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><button type="submit" class="btn btn-primary" onclick="logout()"><i class="fa fa-sign-out fa-fw"></i> Logout</button>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
				
            </ul>
        </nav>
        
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index_admin.html?page=homepage"><i class="fa fa-dashboard"></i>HOME</a>
                    </li>
                    
 <li>
                        <a href="profile_admin.php"><i class="fa fa-circle"></i> PROFILE</a>
                   
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i>CISCO<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_subtopic_cisco.php">Add Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_cisco.php">Search Subtopic</a>
                            </li>
							
							 <li>
                                <a href="view_subtopic_cisco.php?id=0">View Subtopic</a>
                            </li>
                            

                              
                              
                       
                            
                                  
                              </ul>
							  <li>
							  
							  
<a href="#"><i class="fa fa-desktop"></i>JUPITER<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_subtopic_jupiter.php">Add Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_jupiter.php">Search Subtopic</a>
                            </li>
							
							<li>
                                <a href="view_subtopic_jupiter.php?id=0">View Subtopic</a>
                            </li>
                            
                            
                                  
                              </ul>
							  
							 <li> 
							  
                        <a class="active-menu" href="#"><i class="fa fa-desktop"></i>HUAWEI<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li>
                       <a href="add_subtopic_huawei.php">Add Subtopic</a>
                        </li>
                        <li>
                        <a href="search_subtopic_huawei.php">Search Subtopic</a>
                        </li>
<li>
                                <a href="view_subtopic_huawei.php?id=0">View Subtopic</a>
                            </li>
                            

                         </li>
                        </ul>
			
					
						
			
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           LMS<small>   COURSE LEARNING </small>
                        </h1>

                    </div>
                </div>
				
				
<tr>
<td height="450px" valign="top">


</td>
</tr>
    </form>
    
</body>       
<h3>
					
				
				
                <div class="row"></div>
                <!-- /. ROW  -->
			  <footer><p>CLOUD IT SOLUTIONS <a href="http://webthemez.com"></a></p></footer>
			  <div class="main">
            </div>
			
            <?php
            $targetfolder = null;
            //$test = "";
            if(isset($_POST['create']))
            {
                $targetfolder = "uploads/"; 
                $targetfolder = $targetfolder . basename( $_FILES['userfile']['name']) ; 
                $ok=1; 
                $file_type=$_FILES['userfile']['type']; 
                if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") { 
                    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $targetfolder)) 
                    { 
                        echo "The file ". basename( $_FILES['userfile']['name']). " is uploaded"; 
                        $data = array(
                            'ms_title' => $_POST['ms_title'],
                            'ms_content' => $targetfolder,
                            'ms_desc' => $_POST['ms_desc'],
                            'mt_id' => $_POST['mt_id'],
                        );
                        $url = 'http://api.nextexpertsacademymodules.great-site.net/api_learning/index.php/module_subtopic/save/0';
                        $ch = curl_init($url);
                        $postString = http_build_query($data, '', '&');
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
                        $response = curl_exec($ch);
                        curl_close($ch);
                    } 
                    else { 
                        echo "Problem uploading file"; 
                    } 
                    //move_uploaded_file($_FILES['userfile']['tmp_name'], $targetfolder);
                } 
                else { 
                    echo "You may only upload PDFs, JPEGs or GIF files.<br>"; 
                } 
            }
            ?>
            
            
            <form id="add_subtopic" method="POST" style="border:0px solid #ccc" enctype="multipart/form-data" >
                <div class="container">
                    <h3>Add New Subtopic for Huawei</h3>
                    <p>Please fill in this form.</p>
                    <table width="50%">
                    <tr>
                    <td>Subtopic</td>
                    <td><input type="text" placeholder="subtopic" name="ms_title" required></td>
                    </tr>
                    <tr>
                    <!-- <tr>
                    <td>Title</td>
                    <td><input type="text" placeholder="title" name="genre" required></td>
                    </tr> -->
                    <tr>
                    <td>Description</td>
                    <td><input type="text" placeholder="description" name="ms_desc" required></td>
                    </tr>
                    <tr>
                    <small><input name="userfile" type="file" accept="application/pdf, application/vnd.ms-excel" /></small>
                    <br></br>
                    </table>

                    <input type="hidden" name="mt_id" value="3"><!--Change this value according to its title id-->
                    <input type="hidden" name="ms_content" value="<?=$targetfolder?>">

                    <td><td>
                    <tr>
                    <small> <button type="button" class="cancelbtn" name="cancel">Cancel</button></small>
                    <small><button type="submit" class="signupbtn" name="create">Create</button></small>
                    </tr> 
                    </div>
                    
                </div>
            </form>
		

			<!-- Upload File--> 
			<!-- "Open PHP" --> 
			<!-- $targetfolder = "testupload/"; --> 
			<!-- $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ; --> 
			<!-- if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) --> 
			<!-- { --> 
			<!-- echo "The file ". basename( $_FILES['file']['name']). " is uploaded"; --> 
			<!-- } --> 
			<!-- else { --> 
			<!-- echo "Problem uploading file";--> 
			<!-- } --> 
			<!-- "Close PHP" --> 
			
			<!-- Limit Upload File--> 
			<!-- "Open PHP" --> 
			<!--  $targetfolder = "testupload/"; --> 
			<!-- $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ; --> 
			<!-- $ok=1; --> 
			<!-- $file_type=$_FILES['file']['type']; --> 
			<!-- if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") { --> 
			<!-- if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) --> 
			<!--  { --> 
			<!-- echo "The file ". basename( $_FILES['file']['name']). " is uploaded"; --> 
			<!--  } --> 
			<!--  else { -->
			<!-- echo "Problem uploading file"; -->
			<!--   } -->
			<!--   } -->
			<!--   else { -->
			<!--   echo "You may only upload PDFs, JPEGs or GIF files.<br>"; -->
			<!--   } -->
			<!-- "Close PHP" --> 
			
			
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

    <!--Action JS-->
    <script src="js/action.js"></script>


</body>

</html>