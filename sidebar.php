
<?php
//    include("../assets/connection.php");
                        
   session_start();
   $username=$_SESSION["username"];
   $role=$_SESSION["role"];
   ?>
   <script>
   var x=3
   if(x==3){
	   document.getElementById(p6).style.visibility='hidden'
	   document.getElementById(p7).style.visibility='hidden'
	   document.getElementById(p8).style.visibility='hidden'
   document.getElementById(p8).style.visibility='hidden'
   }
   if($role == "student"){
	   document.getElementById(p1).style.visibility='hidden'
	   document.getElementById(p2).style.visibility='hidden'
	   document.getElementById(p3).style.visibility='hidden'
	   document.getElementById(p4).style.visibility='hidden'
	   document.getElementById(p5).style.visibility='hidden'
	   document.getElementById(p8).style.visibility='hidden'
	   document.getElementById(p9).style.visibility='hidden'
   }
   if($role == "corpoate"){
	   
	   document.getElementById(p1).style.visibility='hidden'
	   document.getElementById(p2).style.visibility='hidden'
	   document.getElementById(p3).style.visibility='hidden'
	   document.getElementById(p5).style.visibility='hidden'
	   document.getElementById(p6).style.visibility='hidden'
	   document.getElementById(p7).style.visibility='hidden'
	   document.getElementById(p9).style.visibility='hidden'</script>
   }
</script>   

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
			</div>
			 <div id ="p1">
                <li class="active">
                    <a href="view_feedback.php">
                        <i class="pe-7s-graph"></i>
                        <p>View Feedback</p>
                    </a>
                </li>
				</div>
				<div id="p2">
                <li>
                    <a href="mapping.php">
                        <i class="pe-7s-note2"></i>
                        <p>Vacancy List</p>
                    </a>
                </li>
				</div>
				<div id="p3">
                <li>
                    <a href="icons.php">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
				</div>

                <div id="p4">
                <li>
                    <a href="maps.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                </div>

                <!-- corporate -->
                <div id ="p5">
				<li>
                    <a href="vacancy.php">
                        <i class="pe-7s-bell"></i>
                        <p>Post Vacancy</p>
                    </a>
                </li>
				</div>
				
				<div id="p6">
                <li class="active">
                    <a href="feedback.php">
                        <i class="pe-7s-graph"></i>
                        <p>submit feedback</p>
                    </a>
                </li>
                </div>
                <!-- student -->
                <div id="p7">
                <li class="active">
                    <a href="./exam/exam.php">
                        <i clas"pe-7s-graph"></i>
                        <?php
                        $conn=new mysqli('localhost' ,'root','Vo0xFlDeauPqbeY5','team7');
                         $sql = "select * from student_answer where userid='.$username.' ";
                         if ($res = mysqli_query($conn, $sql))
                          {  
                            if (mysqli_num_rows($res) > 0)
                            {                               
                        ?>

                           <p>Circulum</p>
                        <?php
                        }
                        else
                        {
                         ?>
                        <p>Mock test</p> 
                    <?php 
                        }
                    }
                        ?>
                    </a>
                </li>
                </div>
				<div id="p8">
                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				</div>
				<div id="ph9">
				<li class="active-pro">
                    <a href="upgrade.php">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
				</div>
            </ul>
    	</div>
    </div>
