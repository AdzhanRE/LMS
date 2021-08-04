<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LMS COURSE - HUAWEI</title>
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


</head>

<body>
<?php
    session_start();
    ?>
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
                        <a href="index_admin.php?page=homepage"><i class="fa fa-dashboard"></i>HOME</a>
                    </li>

                    <li>
                        <a href="profile_admin.php"><i class="fa fa-circle"></i> PROFILE</a>

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


                        <a   href="#"><i class="fa fa-desktop"></i>JUPITER<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view_subtopic_jupiter.php?id=0">View Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_jupiter.php">Search Subtopic</a>
                            </li>


                        </ul>

                    <li>

                        <a class="active-menu" href="#"><i class="fa fa-desktop"></i>HUAWEI<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-menu" href="view_subtopic_huawei.php?id=0">View Subtopic</a>
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

                        <p class="course_title" style="font-size: 200%; color: #2DAFCB; font-weight: bold; " ;>
                            HUAWEI
                        </p>

                        <?php
                            $g = isset($_GET) ? "?".http_build_query($_GET) : '';
                            $g2 = $_GET['id'];

                            $url ='http://localhost/api_learning/index.php/module_subtopic/view_all_topic/3';//3 is huawei
                            $ch = curl_init();

                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_URL, $url);

                            $result=curl_exec($ch);
                            curl_close($ch);

                            $data=json_decode($result, true);
                            
                            $title = $data['title'];
                            $id = $_SESSION['user_id'];
                            //$ms_id = $_GET['id'];
                            $data2 = $data['data'];
                            $link_to = "view_subtopic_huawei.php"
                        ?>
                        <!-- LIST OF THE COURSES  -->
                        <select id="selectTopic" class="select_course" name="subtopic_slt" onchange="return changeTopic('<?=$link_to?>')">
                            <option hidden>Learning course</option>
                            <?php
                            foreach($data2 as $d=>$s)
                            {
                                $slt=$g2==$s['ms_id'] ? "selected=\"selected\"" : ""
                            ?>
                                
                                <option value="<?=$s['ms_id']?>" <?=$slt?>><?=$s['ms_title']?></option>

                            <?php
                            }
                            ?>
                        </select>




                        <!-- DISPLAY THE DATA  -->
                        <?php
                            

                            $url2 = 'http://localhost/api_learning/index.php/module_subtopic/view'.$g;
                            $ch2 = curl_init();

                            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch2, CURLOPT_URL, $url2);

                            $result2=curl_exec($ch2);
                            curl_close($ch2);

                            $data_sub=json_decode($result2, true);
                            
                            //$title = $data['title'];

                            //$sub = isset($data['sub']) ? $data['sub'] : '';
                            $d_sub = $data_sub['data'];

                        ?>
                        <div class="course_display">
                            <?php
                            if($d_sub!="")
                            {
                            ?>
                                <p>
                                &nbsp;&nbsp;&nbsp;&nbsp;<?=$d_sub['ms_title']?>
                                </p>

                                <p>
                                    <a href="<?=$d_sub['ms_content']?>">Click to download the note</a>
                                </p>
                            <?php
                            }
                            else
                            {
                            ?>
                                <p>
                                &nbsp;&nbsp;&nbsp;&nbsp;Please select the Topic
                                </p>

                            <?php
                            }
                            ?>

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
        <div class="question_space">
            <!-- EDIT HERE  -->

            <br>

            <p class="qna_title" style="font-size: 40px; padding-left: 5%;">Q&A</p>

            <br>

            <!-- User's question enquiry  -->
            <div class="question_wrap">

            <form class="question_form" id="add_question" method="POST" onsubmit="return add_question()">
                    <!--
                    <div class="question_list">
                        <br>

                        <div class="form__group">
                            <input type="text" class="form__input" id="name" placeholder="Write any questions here" required="" />
                            <label for="name" class="form__label">Write any questions here</label>
                        </div>
                    </div>
                    -->

                    <div class="form">
                        <textarea id="ask_question" class="form__input" autocomplete="off" placeholder="Write here " name="q_question"></textarea>
                        <!--<input type="text" id="ask_question" class="form__input" autocomplete="off" placeholder=" ">-->
                        <label for="ask_question" class="form__label">Curious more, drop your question here</label>
                    </div>
                    <input type="hidden" name="q_answer" value="0">
                    <input type="hidden" name="user_id" value="<?=$id?>">
                    <input type="hidden" name="admin_id" value="0">

                    <input type="hidden" name="ms_id" value="<?=$g2?>">

                    <!-- button submit question into database -->
                    <input type="submit" value="Upload Question" class="submit_question" required>
                </form>

            </div>
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