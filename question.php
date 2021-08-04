<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LMS COURSE - My Questions</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- View course Styles-->
    <link href="view_style.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Searchbox image-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


</head>
<?php
    session_start();
    ?>
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
                <a class="navbar-brand" href="index_user.html"><b>LMS</b>COURSE</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="question.php">
                                <div>
                                    <p>
                                        <strong>My Question</strong>
                                        <span class="pull-right text-muted"></span>
                                    </p>

                                </div>
                            </a>
                        </li>





                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="index.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a class="active-menu" href="index_user.html?page=homepage"><i class="fa fa-dashboard"></i>HOME</a>
                    </li>

                    <li>
                        <a href="profile_user.php"><i class="fa fa-circle"></i> PROFILE</a>

                    <li>
                        <a href="#"><i class="fa fa-desktop"></i>CISCO<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view_subtopic_cisco.php?id=0">View Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_cisco.php">Search Subtopic</a>
                            </li>







                        </ul>
                    <li>


                        <a href="#"><i class="fa fa-desktop"></i>JUPITER<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view_subtopic_jupiter.php?id=0">View Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_jupiter.php">Search Subtopic</a>
                            </li>


                        </ul>

                    <li>

                        <a href="#"><i class="fa fa-desktop"></i>HUAWEI<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view_subtopic_huawei.php?id=0">View Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_huawei.php">Search Subtopic</a>
                            </li>

                        </ul>


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

                <!-- EDIT HERE  -->

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            LMS<small> COURSE LEARNING </small>
                        </h1>

                        <p class="course_title" style="font-size: 200%; color: #2DAFCB; font-weight: bold; padding-bottom: 10px;" ;>
                            My Question
                        </p>







                        <?php

                            $id = $_SESSION['user_id'];

                            $url = 'http://localhost/api_learning/index.php/question/view_all_q/'.$id;//panggil data ikut u_id, ejas lps jd session
                            $ch = curl_init();

                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_URL, $url);

                            $result=curl_exec($ch);
                            curl_close($ch);

                            $data=json_decode($result, true);
                            
                            $title = $data['title'];
                            
                        ?>
                        <!-- Question  -->
                        <div class="course_display question_nav">

                            <br>

                            <!-- search box question  -->
                            <div class="container">
                                <!-- <div class="search_wrap search_wrap_1">
                                    <div class="search_box">
                                        <input type="text" class="input" placeholder="Search all course question..." style="width: 90%;">
                                        <div class="btn btn_common">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <br>
                            <br>

                            <!-- display question -->

                            <!-- <p class="question_title_header">
                                All questions in this course
                            </p> -->
                            <!-- total question -->
                            <!-- <label for="" class="question-quantity">(9572) <small>example</small></label> -->

                            <!-- question collection -->

                            <div class="the_question">
                                <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
                                    <tr align="left">
                                        <th width="26%">Question</th>
                                        <th width="26%">Answer</th>
                                    </tr>

                                    <?php
                                    foreach($data['data'] as $d)
                                    {
                                    ?>
                                    <tr align="left">
                                        <td width="26%"><?=$d['q_question']?></td>
                                        <td width="26%">
                                        <?php
                                            $ans = $d['q_answer'];
                                            if($ans=="0")
                                            {
                                        ?>
                                            <p>No Answer Yet</p>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                            <p><?=$ans?></p>
                                        <?php
                                            }
                                        ?>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>

                                    
                                </table>

                            </div>

                        </div>

                    </div>


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



    <footer>
        <div class="">
            <!-- EDIT HERE  -->


        </div>

    </footer>
    </div>




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