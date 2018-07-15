
<?php
//    include("../assets/connection.php");
                        
   session_start();
   $username=$_SESSION["username"];
   ?>

<div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <!-- admin panel -->
            
            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                      
                        <p>Dashboard</p> 
                   

                    </a>
                </li>

                <li class="active">
                    <a href="view_feedback.php">
                        <i class="pe-7s-graph"></i>
                        <p>View Feedback</p>
                    </a>
                </li>
                <li>
                    <a href="mapping.php">
                        <i class="pe-7s-note2"></i>
                        <p>Vacancy List</p>
                    </a>
                </li>

                <li>
                    <a href="icons.php">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>


                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                
                <li>
                    <a href="typography.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                
                <li>
                    <a href="carrier_graph.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Carrer Graph</p>
                    </a>
                </li>
                

                <!-- corporate -->
                
				<li>
                    <a href="vacancy.php">
                        <i class="pe-7s-bell"></i>
                        <p>Post Vacancy</p>
                    </a>
                </li>

                <li class="active">
                    <a href="feedback.php">
                        <i class="pe-7s-graph"></i>
                        <p>submit feedback</p>
                    </a>
                </li>
                
                <!-- student -->
                
                <li class="active">
                    
                        <i class="pe-7s-graph"></i>
                        <?php
                        $conn=new mysqli('localhost' ,'root','Vo0xFlDeauPqbeY5','team7');
                         $sql = "select * from student_answer where userid='.$username.' ";
                         if ($res = mysqli_query($conn, $sql))
                          {  
                            if (mysqli_num_rows($res) > 0)
                            {                               
                        ?>
                        <a href="../curriculum_bs3/dashboard.php">
                           <p>Circulum</p>
                        <?php
                        }
                        else
                        {
                         ?>
                         <a href="./exam/exam.php">
                        <p>Mock test</p> 
                    <?php 
                        }
                    }
                        ?>
                    </a>
                </li>
                

                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
		

				<li class="active-pro">
                    <a href="upgrade.php">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
